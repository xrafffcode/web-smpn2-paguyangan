<?php

namespace App\Repositories;

use App\Interfaces\BannerRepositoryInterface as InterfacesBannerRepositoryInterface;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerRepository implements InterfacesBannerRepositoryInterface
{
    public function getAllBanners()
    {
        return Banner::all();
    }

    public function getBannerById($id)
    {
        $banner = Banner::findorfail($id);

        return $banner;
    }

    public function createBanner(array $data)
    {

        $desktopImage = $data['desktop_image']->store('banners', 'public');
        $mobileImage = $data['mobile_image']->store('banners', 'public');

        $data['desktop_image'] = $desktopImage;
        $data['mobile_image'] = $mobileImage;

        return Banner::create($data);
    }

    public function updateBanner(array $data, string $id)
    {
        $banner = Banner::find($id);

        if (isset($data['desktop_image'])) {
            $desktopImage = $data['desktop_image']->store('banners', 'public');
            $data['desktop_image'] = $desktopImage;

            $oldDesktopImage = $banner->desktop_image;
            Storage::disk('public')->delete($oldDesktopImage);
        }

        if (isset($data['mobile_image'])) {
            $mobileImage = $data['mobile_image']->store('banners', 'public');
            $data['mobile_image'] = $mobileImage;

            $oldMobileImage = $banner->mobile_image;
            Storage::disk('public')->delete($oldMobileImage);
        }

        return $banner->update($data);
    }

    public function deleteBanner(string $id)
    {
        $banner = Banner::find($id);

        $desktopImage = $banner->desktop_image;
        $mobileImage = $banner->mobile_image;

        if (isset($desktopImage)) {
            Storage::disk('public')->delete($desktopImage);
        }

        if (isset($mobileImage)) {
            Storage::disk('public')->delete($mobileImage);
        }

        return $banner->delete();
    }
}

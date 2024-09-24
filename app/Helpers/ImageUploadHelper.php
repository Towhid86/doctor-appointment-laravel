<?php
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

function check () {
    return 'check helper';
}
function imageUploadLogoIcon($image, $imageDirectory, $existFileUrl=null,$name=null)
{
    if ($image)
    {
        if (file_exists($existFileUrl))
        {
            unlink($existFileUrl);
        }
        $fileName = $name.'.'.$image->getClientOriginalExtension();
        $image->move($imageDirectory, $fileName);
        $fileUrl = $imageDirectory.$fileName;
    } else {
        if (isset($existFileUrl))
        {
            $fileUrl = $existFileUrl;
        } else {
            $fileUrl = '';
        }
    }
    return $fileUrl;
}
function imageUpload($image,$imageUrl=null,$existsImage=null,$imagePattern=null) {
    if ($image)
    {
        if (file_exists($existsImage))
        {
            unlink($existsImage);
        }
        $fileName = time().rand(10,10000).'.'.$image->getClientOriginalExtension();
        $image->move($imageUrl, $fileName);
        $fileUrl = $imageUrl.$fileName;
    } else {
        if (isset($existsImage))
        {
           // $existUrl = parse_url($existsImage);
           //$fileUrl = ltrim($existUrl['path'], "/");  //remove base url & slash..
            $fileUrl = $existsImage;

        } else {
            $fileUrl = '';
        }
    }
    return $fileUrl;
    //return '';
}
function imageUpload1($image,$imageUrl=null,$existsImage=null,$imagePattern=null) {
    if (isset($existsImage)) {
        if (is_string($existsImage)) {
            if (Storage::disk('public')->exists($existsImage)) {
                Storage::delete($existsImage);
            }
        }else {
            foreach ($existsImage as $existImage){
                if (Storage::disk('public')->exists($existImage->image)) {
                    Storage::delete($existImage->image);
                }
            }
        }

    }
    $image_path = Storage::putFile($imageUrl,$image);
    // $image_path = preg_replace($imagePattern, '', $image_path);
    return $image_path;
    //return '';
}
function imageUploadApi($image, $imageDirectory, $existFileUrl=null)
{
    if ($image)
    {
        if (file_exists($existFileUrl))
        {
            unlink($existFileUrl);
        }
        $fileName = time().rand(10,10000).'.'.$image->getClientOriginalExtension();
        $image->move($imageDirectory, $fileName);
        $fileUrl = $imageDirectory.$fileName;
    } else {
        if (isset($existFileUrl))
        {
            $existUrl = parse_url($existFileUrl);
            $fileUrl = ltrim($existUrl['path'], "/");  //remove base url & slash..

        } else {
            $fileUrl = '';
        }
    }
    return $fileUrl;
}
function imageUpload2 ($image, $imageDirectory, $existFileUrl=null)
{
    if ($image)
    {
        if (File::exists($existFileUrl))
        {
            unlink($existFileUrl);
        }
        $fileName = time().rand(10,10000).'.'.$image->getClientOriginalExtension();
        $image->move($imageDirectory, $fileName);
        $fileUrl = $imageDirectory.$fileName;
    } else {
        if (isset($existFileUrl))
        {
            $fileUrl = $existFileUrl;
        } else {
            $fileUrl = '';
        }
    }
    return $fileUrl;
}

function imageUploadApiBase64($image, $imageDirectory, $existFileUrl=null)
{
    // Delete existing file(s)
    if (isset($existFileUrl)) {
        if (is_string($existFileUrl)) {
            if (File::exists($existFileUrl)) {
                unlink($existFileUrl);
            }
        } else {
            foreach ($existFileUrl as $existImage) {
                if (File::exists($existImage->image)) {
                    unlink($existImage->image);
                }
            }
        }
    }
    if (!file_exists($imageDirectory)) {
        mkdir($imageDirectory, 0777, true); // Create directory recursively with full permissions
    }

// Upload new image
    $base64Image = explode(";base64,", $image);
    $explodeImage = explode("/", $base64Image[0]);
    $imageExtension = $explodeImage[1];
    $image_base64 = base64_decode($base64Image[1]);
    $imageName = uniqid() . '.' . $imageExtension;
    $fileUrl = $imageDirectory . $imageName;

    try {
        $s3Url = $fileUrl;
        //Storage::disk('public')->put($s3Url, $image_base64);
        File::put($fileUrl, $image_base64);
        $fileUrl =$s3Url;
        // Upload to S3 or any other storage method you're using
        //File::put($fileUrl, $image_base64);

        // Log success
        // Log::info('Image uploaded successfully: ' . $imageName);

        // Return the file URL
        return $fileUrl;
    } catch (Exception $e) {
        Log::error($e);
        return response()->json(['error' => 'An error occurred while processing the image'], 500);
    }
}
function imageUploadBase64($image, $imageDirectory, $existFileUrl=null)
{
    if (isset($existFileUrl)) {
        if (is_string($existFileUrl)) {
            if (Storage::disk('public')->exists($existFileUrl)) {
                Storage::delete($existFileUrl);
            }
        }else {
            foreach ($existFileUrl as $existImage){
                if (Storage::disk('public')->exists($existImage->image)) {
                    Storage::delete($existImage->image);
                }
            }
        }
    }
    //upload image ...
    $base64Image = explode(";base64,", $image);
    $explodeImage = explode("/", $base64Image[0]); // Change "image/" to "/"
    $imageExtension = $explodeImage[1];
    $image_base64 = base64_decode($base64Image[1]);
    $file = $imageDirectory . uniqid() . '.' . $imageExtension; // Removed the extra space before
    $imageName1 =  uniqid() . '.' . $imageExtension; // Removed the extra space before $imageName

    try {
        // Upload to S3
        $s3Url = $imageDirectory . $imageName1;
        Storage::disk('public')->put($s3Url, $image_base64);
        $fileUrl =$s3Url;

        // Log success
        //Log::info('Image uploaded successfully: ' . $imageName);

        //return response()->json(['message' => 'Image uploaded and stored successfully']);
    } catch (Exception $e) {
        Log::error($e);
        $fileUrl ='';
        return response()->json(['error' => 'An error occurred while processing the image'], 500);
    }
    return $fileUrl;
}

function uploadImageDelete($image=null) {
    if (is_string($image)) {
        if (file_exists($image)) {
            unlink($image);
        }
    }else {
        foreach ($image as $existImage){
            if (file_exists($existImage)) {
                unlink($existImage);
            }
        }
    }
}
function uploadImageDeleteApi($image=null) {
    if (Storage::disk('public')->exists($image)) {
        Storage::delete($image);
    }
}

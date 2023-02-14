<?php
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;#
use Illuminate\Support\Facades\Log;


class Helper {

        public static function prepareUploadCategory(Request $request){
            if ($request->has('imgSrc')) {
                // Get image file
                $image = $request->file('imgSrc');
                // Make a image name based on user name and current timestamp
                $name = $request->input('name');
                // Define folder path
                $folder = '/uploads/images/';
                // Make a file path where image will be stored [ folder path + file name + file extension]
                $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
                // Upload image
                Helper::uploadOne($image, $folder, 'public', $name);
                // Set user profile image path in database to filePath
                $request['img'] = $filePath;
            }
        }

       public static function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
        {
            $name = !is_null($filename) ? $filename : Str::random(25);
            $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
            return $file;
        }

    public static function prepareUploadItem(Request $request){
      Log::info(print_r($request->all(), true));

            if ($request->hasFile('imgSrc1')) {
                // Get image file
                $images = $request->file('imgSrc1');
                Log::Info(print_r($images));
                $count = 1;

                foreach ($images as $image) {
                    if ($count > 3) {
                        break;
                    }
                    // Make a image name based on user name and current timestamp
                    $name = $request->input('title') . $image->getClientOriginalName();
                    // Define folder path
                    $folder = '/uploads/images/';
                    // Make a file path where image will be stored [ folder path + file name + file extension]
                    $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
                    // Upload image
                    Helper::uploadOne($image, $folder, 'public', $name);
                    //Set user profile image path in database to filePath
                    $request['img' . $count] = $filePath;
                    $count++;
                }
            }
        }
}

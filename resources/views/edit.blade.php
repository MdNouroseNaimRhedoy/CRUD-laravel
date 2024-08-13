<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <style type="text/tailwindcss">
        @layer utilities {
            .container{
                @apply px-10 mx-auto;
                content-visibility: auto;
            }
        }
    </style>
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="flex justify-between my-5 ">
        <h2 class="text-red-500 text-xl">Edit - {{$ourPost->name}}</h2>
        <a href="/" class="bg-green-400 text-white rounded py-2 px-4">back Home</a>
    </div>

    <div>
        <form method="POST" action="{{route('update',$ourPost->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col gap-5">
                <label>Name</label>
                <input type="text" name="name" value="{{$ourPost->name}}">
                @error('name')
                <p class="text-red-600">{{$message}}</p>
                @enderror
                <label>Description</label>
                <input type="text" name="description" value="{{$ourPost->description}}">
                @error('description')
                <p class="text-red-600">{{$message}}</p>
                @enderror
                <label>Select image</label>
                <input type="file" name="image" value="{{old("image")}}">
                @error('image')
                <p class="text-red-600">{{$message}}</p>
                @enderror
                <div>
                    <input type="submit" class="bg-green-400 text-white py-2 px-4 rounded inline-block">
                </div>
            </div>
        </form>
    </div>


</div>

</body>
</html>

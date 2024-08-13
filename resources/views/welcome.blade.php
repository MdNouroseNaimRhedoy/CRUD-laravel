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
                <h2 class="text-red-500 text-xl">Hello Nourose</h2>
                <a href="/create" class="bg-green-600 text-white rounded py-2px px-4px">Add New Post</a>
            </div>
    </div>

</body>
</html>

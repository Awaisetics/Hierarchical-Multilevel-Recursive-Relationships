<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container mt-1">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        @foreach($parentCategories as $category)
                        <ul>
                            <li>{{$category->name}}</li>
                            @if(count($category->subcategory))
                            @include('subCategoryList',['subcategories' => $category->subcategory])
                            @endif
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
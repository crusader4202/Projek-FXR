{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('storefood')}}" method="POST" enctype = "multipart/form-data">
        @csrf
        <div>
            <label for="">nama</label>
            <input name="nama"type="text">
        </div>
        <div>
            <label for="">category</label>
            <select name="category_id" id="" placeholder="category">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->nama}}</option>   
                @endforeach
            </select>
        </div>
        <div>
            <label for="">description</label>
            <textarea name="desc" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="">harga</label>
            <input type="number" name="harga" id="">
        </div>
        <div>
            <label for="">gambar</label>
            <input type="file" name="gambar" id="">
        </div>
        <button type="submit">submit</button>
    </form>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rini's Restaurant</title>
    <link rel="stylesheet" href="{{asset('css/create_item.css')}}">
</head>
<body>
    <div class="nav">
        <div><img src="{{asset('assets/img/logo.svg')}}" alt=""></div>
        <div class="tab home"><a href="{{route('food')}}"><img src="{{asset('assets/img/food-home.svg')}}" alt=""></a></div>
        <div class="tab profile"><img src="{{asset('assets/img/food-profile.svg')}}" alt=""></div>
        <div class="tab logout"><a href="{{route('logout')}}"><img src="{{asset('assets/img/food-Log-Out.svg')}}" alt=""></a></div>
    </div>

    <div class="main-container">
        <div class="con1">
            <img class="image_container" src="https://via.placeholder.com/500" alt="">
                <button id="btn_upload"><p>Upload Picture</p></button>
        </div>
        <div class="con2">
            <div class="form">
                <form action="{{route('storefood')}}" method="POST" enctype = "multipart/form-data">
                    @csrf
                    <input type="file" id="upload_image" name="img" accept="image/*">
                    <p>Create New Item</p>
                    <br>
                    <div class="form-name">
                        <!-- <label for="name">Name</label> -->
                        <input type="text" id="name" name="nama" placeholder="Name" required>
                    </div>
                    <br>
                    <div class="form-price">
                        <!-- <label for="price">Price (in RP)</label> -->
                        <input type="number" id="price" name="harga" placeholder="Price" required>
                    </div>
                    <br>
                    <div class="custom-select">
                        <select name="category_id" required>
                          <option value="0"
                                  hidden
                          >Select Category:</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->nama}}</option>   
                        @endforeach
                        </select>
                      </div>
                      <br>
                    <div class="form-desc">
                        <!-- <label for="description">Description</label> -->
                        <input type="text" id="description" name="desc" placeholder="Description" required>
                    </div>
                    <br>
                <!-- <input type="submit" id="submit" value="submit" name="submit" class="btn btn-primary"> -->
                <div class="btn_2">
                    <button id="btn_cancel" type="reset">Cancel</button>
                    <button id="btn_save" type="submit">Save</button>
                </div>
 
                </form>
            </div>
        </div>
    </div>
</body>
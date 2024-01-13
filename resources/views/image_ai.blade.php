<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800" rel="stylesheet" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</head>
<style>
    .optionbox {
        position: absolute;
        margin-top: 15px;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .optionbox select {
        background: #E91E63;
        color: #fff;
        padding: 10px;
        width: 250px;
        height: 50px;
        border: none;
        font-size: 20px;
        box-shadow: 0 5px 48px rgb(93, 15, 9);
        -webkit-appearance: button;
        outline: none;
    }

    .optionbox:before {
        content: '\f358';
        font-family: "Font Awesome 5 free";
        position: absolute;
        top: 0;
        right: 0;
        height: 50px;
        width: 50px;
        background: #E91E63;
        text-align: center;
        line-height: 50px;
        color: #fff;
        font-size: 30px;
        pointer-events: none;
    }

    .optionbox:hover:before {
        background: #c72059;
    }

    #select {
        margin-top: 15px;
        color: white;
        text-align: center;
        font-size: 25px;
        font-weight: bold;
    }
</style>

<body>
    <div class="s006">
        <form action="{{route('search')}}" method="POST">
            @csrf
            <fieldset>
                <legend>AI Image Generator !</legend>
                <div class="inner-form">
                    <div class="input-field">
                        <button class="btn-search" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                </path>
                            </svg>
                        </button>
                        <input id="search" type="text" placeholder="Example: A umbrella in the sky" value="" name="search" />
                    </div>
                </div>
                <p id="select">Select the size of the image !</p>
                <div class="optionbox">
                    <select name="size">
                        <option value="sm">Small</option>
                        <option value="md">Medium</option>
                        <option value="lg">Large</option>
                    </select>
                </div>
            </fieldset>
        </form>
    </div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>

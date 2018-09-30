<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="{{ asset('css/quiz.css') }}" rel="stylesheet">

{{--action="{{route ('upload')}}"--}}
    <form action="{{route('newPropertyForm')}}">
        {{--House numbr--}}
        <div class="form-group">
            <label for="houseNumber">House number or name</label>
            <input type="text" class="form-control" id="houseNumber" placeholder="1">
        </div>
        {{--Post code--}}
        <div class="form-group">
            <label for="postCode">Post code</label>
            <input type="text" class="form-control" id="postCode" placeholder="EX1 ABC">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="propertyTypeRadios" id="propertyTypeRadioHouse" value="option1" checked>
            <label class="form-check-label" for="propertyTypeRadioHouse">
                house
            </label>
        </div>
        {{--Type of property--}}
        <div class="form-check">
            <input class="form-check-input" type="radio" name="propertyTypeRadios" id="propertyTypeRadioFlat" value="option2">
            <label class="form-check-label" for="propertyTypeRadioFlat">
                flat
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="propertyTypeRadios" id="propertyTypeRadioCommercial" value="option3">
            <label class="form-check-label" for="propertyTypeRadioBungalow">
                commercial
            </label>
        </div>
        {{--Price--}}
        <div class="form-group">
            <label for="propertyPrice">Price</label>
            <input type="number" class="form-control" id="propertyPrice" placeholder="£100000">
        </div>
        {{--Number of bathrooms--}}
        <div class="form-group">
            <label for="propertyBathNumber">Number of bathrooms</label>
            <select class="form-control" id="propertyBathNumber">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6+</option>
            </select>
        </div>
        {{--Number of bedrooms--}}
        <div class="form-group">
            <label for="propertyBedNumber">Number of bedrooms</label>
            <select class="form-control" id="propertyBedNumber">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8+</option>
            </select>
        </div>
        <div class="form-group">
            <label for="propertyDescription">Example textarea</label>
            <textarea class="form-control" id="propertyDescription" rows="6"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



        </div>
    </div>

</body>
</html>
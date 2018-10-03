<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>
<body>
<div class="main-content">
    <h1>The current time view application of cities around the world</h1>

    <label for="select-city"></label>
    <select id="select-city">
        <option>Choose the city</option>
        <option value="America-Chihuahua">Chihuahua, Mexico</option>
        <option value="America-Costa_Rica">Costa Rica</option>
        <option value="America-Havana">La Habana, Cuba</option>
        <option value="Asia-Hong_Kong">Hồng Kông</option>
        <option value="Asia-Ho_Chi_Minh">Hồ Chí Minh, Việt Nam</option>
        <option value="Asia-Tokyo">JAV</option>
    </select>
</div>
<script>
    document.getElementById("select-city").onchange = function () {
        ChooseCity()
    };
    function ChooseCity() {
        var time_zone = document.getElementById("select-city");
        window.location.href = time_zone.value;
    }
</script>
</body>
</html>
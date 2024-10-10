<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
      .i1{
        width: 400px;
        margin: auto;
        margin-top:200px;
        height: 400px;
        border-radius:40px;
        /* border: 6px solid rgb(183, 183, 183); */
        background-color: thistle;
        box-shadow:-5px -5px 20px -5px rgb(86, 85, 85) ;
      }
      .i2{
        width: 300px;
        height: 395px;
        border: 1px solid thistle;
        margin: auto;
      }
</style>
<body>
    <div class="i1">
    <form action="{{route('create')}}" method="post" enctype="multipart/form-data">
        <div class="i2">
        <p>Name</p>
        <input type="text" name="name" placeholder="name">
        <p>Gender</p>
          <input type="radio"  name="male" value="male">
          <label>Male</label><br>
          <input type="radio" name="female" value="female">
          <label >Female</label><br>
        <p>Hobby</p>
        <input type="checkbox" name="music" value="music">
        <label for="vehicle1"> Music</label><br>
        <input type="checkbox" name="criket" value="criket">
        <label for="vehicle2">Criket</label><br>
        <input type="checkbox" name="reading" value="reading">
        <label for="vehicle3">Reading </label><br><br>
        <p>City</p>
        <select name="city">
            <option value="Surat">Surat</option>
            <option value="Ahmdavad">Ahmdavad</option>
            <option value="Bhavnagar">Bhavnagar</option>
            <option value="Amreli">Amreli</option>
          </select>
          <input type="file" name="img">
          <input type="submit" name="submit">
        </div>
    </form>
</div>
</body>
</html>
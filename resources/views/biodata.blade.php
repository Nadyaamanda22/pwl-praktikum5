@extends('layout.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="w-full px-6 py-6 mx-auto">
  <h1 class="text-2xl font-bold mb-8">Biodata</h1>
  <div class="flex flex-wrap -mx-3">
    

<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  .container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 1000px;
    width: 100%;
    text-align: center;
  }
  h1 {
    color: #333;
  }
  p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
  }
  .biodata-item {
    text-align: left;
    margin-bottom: 15px;
  }
  .biodata-item label {
    font-weight: bold;
  }
</style>
</head>
<body>

<div class="container">
  <h1>Biodata</h1>
  <div class="biodata-item">
    <label for="name">Nama</label>
    <p id="name">Nadya Amanda</p>
  </div>
  <div class="biodata-item">
    <label for="age">Umur</label>
    <p id="age">20 tahun</p>
  </div>
  <div class="biodata-item">
    <label for="occupation">Pekerjaan</label>
    <p id="occupation">Pelajar/Mahasiswa</p>
  </div>
  <div class="biodata-item">
    <label for="location">Lokasi</label>
    <p id="location">Pontianak, Kalimantan Barat</p>
  </div>
</div>

</body>
</html>


@endsection

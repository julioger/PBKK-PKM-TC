
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Registrasi PKM TC</title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body  style="background-color: currentColor">
        <div class="container" style="color: white">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5" style="font-size: 15pt; font-weight:bold">
                        <div class="card-body"  style="background-color:rgb(218, 92, 88)">
                            <h3 class="text-center">Formulir Pendaftaran PKM TC</h3>
                              <!-- form validasi -->
                              <form action="/output" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input class="form-control" type="text" name="nama" value="{{ old('nama') }}" class="@error('nama') is-invalid @enderror">
                                            @error('nama')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                               <label for="nrp">NRP</label>
                                               <input class="form-control" type="text" name="nrp" value="{{ old('nrp') }}" class="@error('nrp') is-invalid @enderror">
                                                @error('nrp')
                                                         <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
        
                                        <div class="form-group">
                                            <label for="semester">Semester</label>
                                            <input class="form-control" type="text" name="semester" value="{{ old('semester') }}" class="@error('semester') is-invalid @enderror">
                                            @error('semester')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="pilihan1">Pilihan PKM 1</label>
                                            <input class="form-control" type="text" name="pilihan1" value="{{ old('pilihan1') }}" class="@error('pilihan1') is-invalid @enderror">
                                            @error('pilihan1')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="pilihan2">Pilihan PKM 2</label>
                                            <input class="form-control" type="text" name="pilihan2" value="{{ old('pilihan2') }}" class="@error('pilihan2') is-invalid @enderror">
                                            @error('pilihan2')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="foto">KTM</label>
                                            <input type="file" class="form-control-file" id="ktm" name="ktm" value="{{ old('ktm') }}" class="@error('ktm') is-invalid @enderror">
                                            @error('ktm')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    
                                         <div class="form-group">
                                               <input class="btn btn-primary" type="submit" value="Valid" style="padding: 10px 24px; font-size:14pt;">
                                         </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</body>
</html>
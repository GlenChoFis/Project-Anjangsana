<div class="container rounded bg-white mt-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="https://lh6.googleusercontent.com/proxy/ZW1YAkPTczms6ZdPzQDf9zRzeCCadEsKMIIEDYyD3HHAXGbF2wrcF3DxDwJDZFRU3jFDuYEn5x1hik3jnxxaucn8LK9E9ZUBpc-stufX2P08HIL6wMdPAzdUmGqSg0_Cj0yQdLmco8MQtUWpYqssNbVRiksgjLsvuD7Vc49eSeSd-6qgX6aMEqxfLQAfc-g9KX1cs5LCtngBYT0JE9nd4s6eIONsrGfN3D-n=w1200-h630-p-k-no-nu" 
                alt="" width="90"><span class="font-weight-bold">{{Auth::user()->name}}</span><span class="text-black-50">{{Auth::user()->email}}</span><span>Indonesia</span></div>
            </div>
            <link rel="stylesheet" href="assets/css/profil.css">
            <div class="col-md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-row align-items-center back">
                            <h6><a href="/menuutama">Menu Utama</a></h6>
                        </div>
                        <h5 class="text-right">Edit Profile</h5>
                        
                    </div>
                    <form action="/updateProfile" method="post">
                        @csrf

                        <div class="row mt-2">
                            <div class="col-md-6"><input type="text" class="form-control" name="name" value="{{Auth::user()->name}}"></div>
                            <div class="col-md-6"><input type="text" class="form-control" value="{{Auth::user()->alamat}}" name="alamat"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><input type="text" class="form-control" name="email" value="{{Auth::user()->email}}" readonly></div>
                            <div class="col-md-6"><input type="text" class="form-control" value="{{Auth::user()->notelp}}" name="notelp"></div>
                        </div>
                        <!-- <div class="row mt-3">
                            <div class="col-md-6"><input type="text" class="form-control" placeholder="Bank Name" value="BNI"></div>
                            <div class="col-md-6"><input type="text" class="form-control" value="043958409584095" placeholder="Account Number"></div>
                        </div> -->
                        <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
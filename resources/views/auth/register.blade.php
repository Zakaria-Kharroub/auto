<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>

    @include('layouts.navbar')

    <div class="bg-light py-3 py-md-5 mt-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
                    <div class="bg-white p-4 p-md-5 rounded shadow-sm">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-5">
                                    <h3 class="text-center">choose register</h3>
                                </div>
                            </div>
                        </div>

                        <div class="row gy-3 gy-md-4 overflow-hidden">
                            <div class="col-12">
                                <div class="d-grid">
                                    <a href="{{route('registeruser')}}" class="btn btn-lg btn-primary">Register as user</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <a href="{{route('registeragence')}}" class="btn btn-lg btn-primary">Register as agence</a>
                                </div>
                            </div>

                        

                        <div class="row">
                            <div class="col-12">
                                <hr class="mt-5 mb-4 border-secondary-subtle">
                                <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                                    <a href="{{route('login')}}" class="link-secondary " >login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

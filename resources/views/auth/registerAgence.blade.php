<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>

    @include('layouts.navbar')

    <div class="bg-light py-3 py-md-5 mt-2">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
                    <div class="bg-white p-4 p-md-5 rounded shadow-sm">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-5">
                                    <h3 class="text-center">Register</h3>
                                </div>
                            </div>
                        </div>

                        <form action={{route('storeagence')}} method="post">
                            @csrf
                            <div class="row gy-3 gy-md-4 overflow-hidden">
                                <div class="col-12">
                                    <label id="labelName" for="name" class="form-label">Username <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="entrez username" required oninput="validateName()">
                                </div>

                                <div class="col-12">
                                    <label id="labelEmail" for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="ali@gmail.com" required oninput="validateEmail()">
                                </div>

                                <div class="col-12">
                                    <label id="labelName" for="name" class="form-label">name agence <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name_agence" name="name_agence" placeholder="entrez name de votre agence " required oninput="validateName()">
                                </div>

                                <div class="col-12">
                                    <label id="labelName" for="name" class="form-label">phone <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="entrez telephone number"  required >
                                </div>

                                <div class="col-12">
                                    <label id="labelName" for="name" class="form-label">ville <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="ville" name="ville" placeholder="entrez ville"  required >
                                </div>

                                <div class="col-12">
                                    <label id="labelName" for="name" class="form-label">address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="entrez address"  required >
                                </div>




                                
                                
                                {{-- <input type="hidden" name="role_id" value="1" > --}}

                                <div class="col-12">
                                    <label id="labelPassword" for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="entrez le mot de pass" required oninput="validatePassword()">
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button id="btn-register" type="submit" name="submit" class="btn btn-lg btn-primary" onclick="validateAll()">Register</button>                                    </div>
                                </div>
                            </div>
                        </form>

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

    <script>

        const labelname = document.getElementById('labelName');
        const nameInput = document.getElementById('name');

        const labelEmail = document.getElementById('labelEmail');
        const emailInput = document.getElementById('email');
        const emailRejex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        const labelPassword =document.getElementById('labelPassword');
        const passwordInput = document.getElementById('password');

        const btnRegister = document.getElementById('btn-register');




        function validateName() {
            const name = nameInput.value.trim();
            if (name.length < 3) {
                labelname.classList.add('text-danger');
                labelname.textContent = 'username doit comporter au moins 3 char';
            } else {
                labelname.classList.remove('text-danger');
                labelname.innerHTML = 'Username <i class="fa-regular fa-circle-check"></i>';
            }
        }

        function validateEmail(){
            const email = emailInput.value.trim();
            if (!emailRejex.test(email)) {
                labelEmail.classList.add('text-danger');
                labelEmail.textContent = 'Email invalide';
            } else {
                labelEmail.classList.remove('text-danger');
                labelEmail.innerHTML = 'Email <i class="fa-regular fa-circle-check"></i>';
            }
        }

        function validatePassword(){

            const password =passwordInput.value.trim();

            if(password.length < 5){
                labelPassword.classList.add('text-danger');
                labelPassword.textContent='mot de pass doit comporter moins 5 char';
            }else{
                labelPassword.classList.remove('text-danger');
                labelPassword.innerHTML ='Password <i class="fa-regular fa-circle-check"></i>';
            }

        }
        











    </script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

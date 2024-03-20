<!DOCTYPE html>
<html lang="en">
@include ('agence.layouts.headAgence')
<body>

    @include ('agence.layouts.asideAgence')


    


    <section class="dashboard">

       @include('agence.layouts.navbarAgence')

         <div class="dash-content">
             <div class="overview">

                 <div class="title">
                    <i class="fa-solid fa-chart-simple"></i>
                     <span class="text">statistiques</span>
                 </div>
                 <div class="boxes">
                     <div class="box box1">
                         <i class="uil uil-newspaper"></i>
                         <span class="text">Total events</span>
                         <span class="number">45</span>
                     </div>
                     <div class="box box2">
                         <i class="uil uil-user"></i>
                         <span class="text">utilisateurs</span>
                         <span class="number">33</span>
                     </div>
                     <div class="box box3">
                         <i class="uil uil-files-landscapes"></i>
                         <span class="text">Total Categories</span>
                         <span class="number">12</span>
                     </div>
                 </div>
             </div>


             </div>
         </div>
     </section>


     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
     
</body>
</html>
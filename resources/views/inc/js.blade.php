<!-- Bootstrap core JavaScript-->
<script src="{{asset('assets/admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('assets/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('assets/admin/js/sb-admin-2.min.js')}}"></script>

<!-- Vendor JS Files -->
<script src="{{asset('assets/cv/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assets/cv/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/cv/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/cv/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/cv/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/cv/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/cv/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('assets/cv/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/cv/assets/js/main.js')}}"></script>

<script>
    $('.confirm').click(function(){
        let form = $(this).closest('form');
        let name = $(this).data('name');

        event.preventDefault();
        Swal.fire({
            title:'Are you sure?',
            text:'You want be able to revert this!',
            icon:'warning',
            showCancelButton:true,
            confirmButtonClass:'mr-2',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText:'No, Cancel',
            reverseButton:true,
        }).then((result)=> {
            if (result.isConfirmed) {
                form.submit();
            }
        })
    })
</script>

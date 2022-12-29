<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

@if (url()->current() ==url('/projects/openai'))
<script>
  document.getElementById('btnFetch').addEventListener('click', function () {
    document.getElementById('spinner').style.position = 'inherit';
    document.getElementById('spinner').style.display = 'inherit';
    // Perform action
    document.getElementById('text-search').style.display = 'none';
  });
</script>
@endif

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script>
  $(window).on('load', function(){
   $('.overlay').fadeOut();
   $('.overlay').remove();
});
</script>
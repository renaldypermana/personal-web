 <div>
    <p style="text-align: center; font-size: 15px;" class="ui inverted vertical footer segment">COPYRIGHT &copy; Renaldy</p>
  </div>
   
<script src="https://ajax.googleapis.com/ajax/libs/d3js/5.9.7/d3.min.js"></script>
  <script src="dist/js/lightbox-plus-jquery.js"></script>
    <script src="dist/semantic.js"></script>
    <script src="dist/semantic.min.js"></script>
    <script src="dist/components/progress.js"></script>
  <script src="dist/components/form.js"></script>
    <script srce="dist/components/modal.js"></script>
    <script>
      $('.ui.form')
  .form({
    fields: {
      name: {
        identifier: 'name',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      }, 
       email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid e-mail'
                }
              ]
            },
      terms: {
        identifier: 'terms',
        rules: [
          {
            type   : 'checked',
            prompt : 'You must agree to the terms and conditions'
          }
        ]
      }
    }
  })
;
$('#example2').progress({
  percent: 54
});

$('#example3').progress({
  percent: 80
});

$('#example4').progress({
  percent: 30
});

$('#example5').progress({
  percent: 30
});

$('#example6').progress({
  percent: 20
});

$('#example7').progress({
  percent: 20
});

$('a[href*="#"]').on('click', function(e) {
  e.preventDefault()

  $('html, body').animate(
    {
      scrollTop: $($(this).attr('href')).offset().top,
    },
    500,
    'linear'
  )
})
    </script>
</body>
</html>
<?php  
    require_once('header.php');
?>

      <div class="container">
        <section class="category-section">
            <h1 class="text-uppercase border-bottom">Category :</h1>

            <button class="btn btn-primary add_category">Add New Category</button>
                  <!-- Modal -->
      <div class="modal fade" id="catModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                   <h5 class="modal-title fs-5" id="exampleModalLabel">Modal title</h5>
                   <button type="button" class="btn-close fas fa-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
           <div class="modal-body">
                     <form action="" method="POST" id="cat_form"> 
                        <div class="form-group">
                            <label for="category_name">Category Name :</label>
                            <input type="text" class="form-control" name="category_name" id="category_name">
                            <span id="error" class="text-danger"></span>
                        </div>
        
                </div>
                  <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary save">Save</button>
              </div>
              </form>
       </div>
     </div>
   </div>
        </section>
      </div>

<?php
   require_once('footer.php'); 
?> 

<script>
    $(document).ready(function(){
          $(document).on("submit","#cat_form",function(e){
            e.preventDefault();
            var fd = new FormData(this);

            $.ajax({
                url:'insert/cat_insert.php',
                type:'POST',
                data:fd,
                dataType:'json',
                processData:false,
                contentType:false,
                success:function(response){
                    if(response.status == 0)
                    {
                        $('#error').html(response.msg_error);
                    }
                    if(response.status == 1)
                    {
                      alert('Success');
                    }
                }
            });
          });
    });
</script>
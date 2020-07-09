<!-- uji coba package editor -->


<div class= "ml-3 mt-3">
<form action="/"  method = "POST">
@csrf

<div class="form-group">
  <label for="judul">Judul :</label>
  <input type="text" class="form-control" id="judul" placeholder="Masukan Judul" name="judul" >
</div>

<div class="form-group">
  <label for="isi">Isi :</label>
  <textarea id="konten" class="form-control" name="konten" rows="10" cols="50"></textarea>
  <!-- <input type="text" class="form-control" id="isi" placeholder="Masukan Isi" name="isi" > -->
</div>

<div class="form-group">
  <label for="slug">Slug:</label>
  <input type="text" class="form-control" placeholder="Masukan Isi" id="slug"  name="slug">
</div>

<div class="form-group">
  <label for="tag">Tag :</label>
  <input type="text" class="form-control"  placeholder="Masukan Isi" id="tag"   name="tag" >
</div>
 
<button type="submit" class="btn btn-primary">Submit</button>
<a href = "/artikel" class="btn btn-primary">Kembali</a>
</form>

</div>



<script src="{{asset('/ckeditor/ckeditor.js')}}"></script>
<script>
  var konten = document.getElementById("konten");
    CKEDITOR.replace(konten,{
    language:'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script>
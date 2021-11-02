<form action="/tambahucapan" method="POST" enctype="multipart/form-data">
  @csrf
    {{-- Nama --}}
    <div class="mb-3">
      <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" placeholder="Masukkan Nama Anda" name="nama" id="nama" required>
      @error('nama')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-3">
        <label for="ucapan" class="form-label">Buat Kartu Ucapan</label>
          @error('ucapan')
            <p class="text-danger"> {{ $message }}</p>
          @enderror  
        <input id="ucapan" type="hidden" name="ucapan" value="{{ old('ucapan') }}">
        <trix-editor input="ucapan"></trix-editor>
    </div>
      <button type="submit" class="btn btn-primary">Kirimkan Ucapan</button>
</form>

<script>
  const nama = document.querySelector('#nama');

  document.addEventListener('trix-file-accept', function(e){
  e.preventDefault();
  })
  document.addEventListener('trix-file-accept', function(e){
      e.preventDefault();
  })
</script>
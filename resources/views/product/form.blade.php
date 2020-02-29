<div class="form-group">
    <label for="name">Product Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" aria-describedby="name" placeholder="Product name" autocomplete="off" value="{{ $product->name ?? old('name') }}">
    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
  </div>

  <div class="form-group">
    <label for="description">Product Description</label>
    <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" aria-describedby="description" placeholder="Product description" autocomplete="off" value="{{ old('description') ?? $product->description }}">
    @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
  </div>

  <div class="form-group">
    <label for="price">Product Price</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" aria-describedby="price" placeholder="Product price" autocomplete="off" value="{{ old('price') ?? $product->price }}">
    @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
  </div>

  <div class="form-group">
    <label for="qty">Product Qty</label>
    <input type="text" class="form-control @error('qty') is-invalid @enderror" name="qty" id="qty" aria-describedby="qty" placeholder="Product qty" autocomplete="off" value="{{ old('qty') ?? $product->qty }}">
    @error('qty') <div class="invalid-feedback">{{ $message }}</div> @enderror
  </div>
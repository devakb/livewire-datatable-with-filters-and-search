<div>
    <div class="alert alert-info">
       See the table. You can filter the data by searching for name/price/description/category.
    </div>
    <table class="table">
       <thead>
          <tr>
             <th class="w-25">
                Name
             </th>
             <th class="w-25">
                Price
             </th>
             <th class="w-25">
                Description
             </th>
             <th class="w-25">
                Category
             </th>
          </tr>
          <tr>
             <td>
                <input type="text" class="form-control" wire:model="searchColumnsName"/>
             </td>
             <td>
                From
                <input type="number" class="form-control d-inline mb-2" style="width: 75px"
                   wire:model="searchColumnsPriceMin" />
                to
                <input type="number" class="form-control d-inline" style="width: 75px"
                   wire:model="searchColumnsPriceMax" />
             </td>
             <td>
                <input type="text" class="form-control" wire:model="searchColumnsDescription"/>
             </td>
             <td>
                <select class="form-control" wire:model="searchColumnsCategoryId">
                   <option value="">-- choose category --</option>
                    @foreach (App\Models\ProductCategory::pluck('category_name', 'id') as $cate_id => $cate_name)
                        <option value="{{ $cate_id }}">{{ $cate_name }}</option>
                    @endforeach
                </select>
             </td>
          </tr>
       </thead>
       <tbody>

          @forelse($products as $product)
              <tr>
                  <td>{{ $product->product_name }}</td>
                  <td>
                     ₹
                      {{ $product->product_price }}
                  </td>
                  <td>{{ $product->description }}</td>
                  <td>{{ $product->category->category_name }}</td>
              </tr>
          @empty
              <tr>
                  <td class="text-center text-muted small" colspan="100%">
                      No Products Found
                  </td>
              </tr>
          @endforelse

       </tbody>
    </table>
    <div>
      {{ $products->links() }}


    </div>
 </div>

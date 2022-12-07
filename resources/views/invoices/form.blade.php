<div class="row">
    {{-- Left section --}}
    <div class="col-md-8">
        {{-- Name --}}
        <div class="form-group mb-4">
            <label for="name">Invoice name</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                class="form-control @error('name') is-invalid @enderror" 
                placeholder="invoice name" 
                value="{{ old('name') ?? ($invoice->name ?? '') }}"
            />
        </div>

        {{-- Description --}}
        <div class="form-group mb-4">
            <label for="description">Description</label>
            <textarea
                class="form-control @error('description') is-invalid @enderror"
                name="description" 
                id="description" 
                placeholder="Short description"
            > {!! old('description') ?? $invoice->description ?? ''!!}</textarea>
        </div>
    </div>

    {{-- right section --}}
    <div class="col-md-4">
        {{-- Amount --}}
        <div class="form-group mb-4">
            <label for="total">Total</label>
            <input 
                class="form-control bg-secondary" 
                name="total" 
                id="total" 
                default="0" 
                type="number" 
                min="0" 
                value="{{$invoice->total ?? 0}}" readonly disabled>
        </div>

        {{-- client --}}
        <div class="form-group mb-4">
            <label for="client">Client</label>
            <select id="client" name="client_id" class="form-control form-select">
                @foreach($clients as $client)
                    <option value="{{$client->id}}">{{$client->name}}</option>
                @endforeach
            </select>
        </div>

        {{-- status --}}
        <div class="form-group mb-4">
            <label for="invoice_status">Status</label>
            <select id="invoice_status" name="status" class="form-control form-select">
                <option value="pending">Pending</option>
                <option value="paid">Paid</option>
                <option value="cancelled">Cancelled</option>
            </select>
        </div>
    </div>
</div>

<!-- Preview -->

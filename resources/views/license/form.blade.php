<!--テスト-->

<div class="row">
    <div class="col-md-8">
        @include('license/message')
        
        @if($target == 'store')
        <form action="/license" method="post">
        @elseif($target == 'update')
        <form action="/license/{{ $license->id }}" method="post">
            <input type="hidden" name="_method" value="PUT">
        @endif
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="product_name">製品名</label>
                <input type="text" class="form-control" name="product_name" value="{{ $license->product_name }}">
            </div>
            <div class="form-group">
                <label for="product_key">プロダクトキー</label>
                <input type="text" class="form-control" name="product_key" value="{{ $license->product_key }}">
            </div>
            <div class="form-group">
                <label for="expire_date">有効期限</label>
                <input type="text" class="form-control" name="expire_date" value="{{ $license->expire_date }}">
            </div>
            <div class="form-group">
                <label for="purchase_date">購入日</label>
                <input type="text" class="form-control" name="purchase_date" value="{{ $license->purchase_date }}">
            </div>
            <div class="form-group">
                <label for="is_notify">通知</label>
                <input type="text" class="form-control" name="is_notify" value="{{ $license->is_notify }}">
            </div>
            <button type="submit" class="btn btn-primary">登録</button>
            <a href="/license" class="btn btn-primary">戻る</a>
        </form>
    </div>
</div>
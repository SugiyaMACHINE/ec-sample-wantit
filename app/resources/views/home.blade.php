@extends('layouts.layout')
@section('content')
<main class="py-4">
     <div class="row justify-content-around">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class='text-center'>日付検索</div>
                     </div>
                    <div class="card-body">
                        <form action="{{ route('index.search')}}" method="post">
                        @csrf
                        <div class="d-flex justify-content-center mb-10">
                            <div class="col-md-4">
                                <input type="date" class="form-control" name="start" id="DateSince" value="<?php {{echo($start ?? '');}} ?>"/>
                            </div>
                            <div>~</div>
                            <br>
                            <div class="col-md-4">
                                <input type="date" class="form-control" name="end" id="DateUntil" value="<?php {{echo($end ?? '');}} ?>" />
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary col-2 ml-4">検索</button>
                            <button type="submit" name="reset" class="btn btn-dark ml-2 btn-sm">リセット</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </div>
    <div class="row justify-content-around mt-3 mb-2">
        <a href="{{ route('create.income') }}">
            <button type="button" class="btn btn-primary">+ 収入</button>
        </a>
        <a href="{{ route('create.spend') }}">
            <button type="button" class="btn btn-primary">+ 支出</button>
        </a>
    </div>
    <div class="row justify-content-around">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class='text-center'>収入</div>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <table class='table table-striped'>
                            <thead>
                                <tr>
                                    <th scope='col'>詳細</th>
                                    <th scope='col'>日付</th>
                                    <th scope='col'>金額</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- ここに収入を表示する -->
                                @if(isset($incomes))
                                @foreach ($incomes as $income)
                                <tr>
                                    <th scope="col">
                                        <a href="{{ route('income.detail', ['income' => $income['id']]) }}">#</a>
                                    </th>
                                    <th scope="col">{{ $income['date'] }}</th>
                                    <th scope="col">{{ $income['amount'] }}</th>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class='text-center'>支出</div>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <table class='table table-striped'>
                            <thead>
                                <tr>
                                    <th scope='col'>詳細</th>
                                    <th scope='col'>日付</th>
                                    <th scope='col'>金額</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- ここに支出を表示する -->
                                @if(isset($spends))
                                @foreach ($spends as $spend)
                                <tr>
                                    <th scope="col">
                                        <a href="{{ route('spend.detail', ['spending' => $spend['id']]) }}">#</a>
                                    </th>
                                    <th scope="col">{{ $spend['date'] }}</th>
                                    <th scope="col">{{ $spend['amount'] }}</th>
                                    </th>
                                    @endforeach
                                    @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</main>
<script>
// カレンダー同期
function dateSinceblurred(e) {
  const dateUntil = document.getElementById("DateUntil");
  const value = e.target.value;
  if (dateUntil.value < value) {    // チェックインがチェックアウトより遅い場合
    dateUntil.value = '';        // チェックアウトにチェックインを代入
  }
}
window.onload = () => {
  document
    .getElementById("DateSince")
    .addEventListener("blur", dateSinceblurred);  // ブラー（フォーカスアウト）で発火
console.log('check2')
};
// カレンダー同期---------------------------------------------
</script>
@endsection
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    <h3></h3>
    <div class="fs-3 pb-5">管理画面システム</div>
    <form action="{{ route('form.index') }}" method="POST">
        <div>
            @csrf   
            <div class="row mb-4">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm fs-6">お名前</label>
                <div class="col-sm-2">
                    <input type="name" class="form-control form-control-sm  fs-6" id="colFormLabelSm" placeholder="" name="full-name" value="{{$searchname}}">
                </div>
                    <div class="col-sm-1 fs-6"></div>

                <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm fs-6">性別</label>
                <div class="col-sm-4 fs-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value=""  checked="checked">
                        <label class="form-check-label" for="inlineRadio1">全て</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1">男性</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">女性</label>
                    </div>       
                </div>
            </div>

            <div class="row mb-4">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm fs-6">登録日</label>
                <div class="col-sm-3">
                    <input type="name" class="form-control form-control-sm  fs-6" id="colFormLabelSm" placeholder="20xx-xx-xx" name="updated_at1" value="{{$searchdate1}}">
                </div>
                <div class="col-sm-1 text-center">～</div>
                <div class="col-sm-3">
                    <input type="name" class="form-control form-control-sm  fs-6" id="colFormLabelSm" placeholder="20xx-xx-xx" name="updated_at2" value="{{$searchdate2}}">
                </div>
            </div>        

            <div class="row mb-4">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm fs-6">メールアドレス</label>
                <div class="col-sm-3">
                    <input type="email" class="form-control form-control-sm  fs-6" id="colFormLabelSm" placeholder="" name="email" value="{{$searchemail}}">
                </div>
            </div>        

            <div class="d-grid gap-2 col-2 mx-auto mt-5">
                <button type="submit" class="btn btn-dark">検索</button>
            </div> 
        </div>
    </form>

    <form action="{{ route('form.search') }}" method="GET">
        <div class="d-grid gap-2 col-2 mx-auto mt-3 mb-5">
            <button type="submit">リセット</button>
        </div> 
    </form>

        <div class="d-flex justify-content-start ">

            <?php
            echo '全'. $posts_num. '件'; 
            ?>
        </div>

        <div class="d-flex justify-content-end ">
        </div>
        <div class="table-responsive">
            <table class="table align-middle">
              <thread>
                <tr>
                    <th style="width:5%">ID</th>
                    <th style="width:10%">お名前</th>
                    <th style="width:5%">性別</th>
                    <th style="width:15%">メールアドレス</th>
                    <th style="width:50%">ご意見</th>
                    <th style="width:10%"></th>

                </tr>
              </thread>
              <tbody>
                 @foreach($posts as $post)
                <tr>
                    <td>{{$post['id']}}</td>
                    <td>{{$post['fullname']}}</td>
                    <td>
                    <?php
                    switch($post['gender']){
                        case '1':
                            echo "男性";
                            break;
                        case '2':
                            echo "女性";
                            break;
                        }
                    ?>
                    </td>
    
                    <td>{{$post['email']}}</td>
                    <td>{{$post['opinion']}}</td>
                    <td>
                        <form action="{{ route('form.destroy') }}"  method="POST">
                        <button type="submit" class="btn btn-dark">削除</button>
                        </form>
                    </td>
                </tr>
                 @endforeach
              </tbody>
            </table>
        </div>        

        <a href="{{ route('form.show') }}">トップページに戻る</a>
    

</html>

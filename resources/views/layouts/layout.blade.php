<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="logo" href="{{ asset('img') }}">
    <link rel="stylesheet" href="{{ asset('css/concerts.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300">
</head>
<body>
    <div class="container header">
        <div class="row">
            <h1>@yield('page-title')</h1>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="/professional">Professional</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/amateur">Amateur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/student">Student</a>
                </li>
            </ul>
        </div>    
    </div>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-light bg-light search-bar">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </nav>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-7 scroll">
                <div class="nav-container">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#!">Popular Concerts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!">Comming Concerts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!">New Arrival Concerts</a>
                        </li>
                    </ul>
                </div>
                <div class="popular">
                    <h3>Popular Concert</h3>
                    <p>Likeの多いコンサートから順に表示されます。</p>
                    @foreach($concerts as $concert)
                        <div class="concert">
                            <h5 class="title">{{ $concert->title }}</h5>
                            <div class="description">{{ $concert->description }}</div>
                            <div class="like">
                                <img src="" alt="">
                                <p>10</p>
                            </div>
                            <!-- <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle"
                                        type="button" id="dropdownMenu1" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    ・・・
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="#!">編集</a>
                                    <a class="dropdown-item" href="#!">削除</a>
                                </div>
                            </div> -->
                        </div>
                    @endforeach
                </div>
                <div class="popular">
                    <h3>Comming Concert</h3>
                    <p>開催間近のコンサート情報です。</p>
                    @foreach($concerts as $concert)
                        <div class="concert">
                            <h5 class="title">{{ $concert->title }}</h5>
                            <div class="description">{{ $concert->description }}</div>
                            <div class="like">
                                <img src="" alt="">
                                <p>10</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="popular">
                    <h3>New Arrival</h3>
                    <p>新しく投稿されたコンサート情報が表示されます。</p>
                    @foreach($concerts as $concert)
                        <div class="concert">
                            <h5 class="title">{{ $concert->title }}</h5>
                            <div class="description">{{ $concert->description }}</div>
                            <div class="like">
                                <img src="" alt="">
                                <p>10</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div>
                    <a href="/"><button type="button" class="btn btn-secondary">Home</button></a>
                </div>
            </div>
            <div class="col-md-5 side-bar">
                <div class="card">
                    <img class="card-img-top" src="img/orchestra.jpg" alt="Concert Photo">
                    <div class="card-body">
                        <h4 class="card-title">ウィーンフィル来日。春の祭典。</h4>
                        <p class="card-text">
                        Some quick example text to build on the card title
                        and make up the bulk of the card's content.
                        </p>
                    </div>
                </div>
                
                <div>
                    <form>
                        <div class="form-group">
                            <label for="formGroupExampleInput">記事タイトル</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="記事タイトル">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">詳細</label>
                            <textarea class="form-control" name="" id="formGroupExampleInput2" cols="30" rows="6" placeholder="コンサート情報詳細"></textarea>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="concert-type" id="exampleRadios1" value="1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Professional
                            </label>
                            <input class="form-check-input" type="radio" name="concert-type" id="exampleRadios1" value="2" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Amateur
                            </label>
                            <input class="form-check-input" type="radio" name="concert-type" id="exampleRadios1" value="3" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Student
                            </label>
                        </div>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        <button type="submit" class="btn btn-primary">投稿</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
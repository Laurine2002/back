<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>

    @extends('layout.app')

    @section('content')

    <form method="POST" action="{{route('store.post') }}" >
        
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Titre" name="title">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <textarea class="form-control" cols="20" rows="2" placeholder="Contenu" name="content"></textarea>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <button type="submit" class="form-controlbtn btn-primary">Envoyer</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
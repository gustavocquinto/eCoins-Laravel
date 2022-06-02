<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Index - ECOIN</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>
<body>
    <header>
        @include('layouts.navigation')

        <div class="main-video">
            <h1>ECOIN - SUA LOJA PREFERIDA GAMER</h1>
            <video src="images/valorant-video.mp4" id="vid" autoplay></video>
        </div>
    </header>
    <main>
        <h1>Resultado da Busca</h1>
        <section class="products">
            <div class="card">
                <div class="imgBox">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/25627d58-d99c-4ac7-a6fe-7a4bb329f3f5/d6g9sop-87c3ff54-8c75-41a6-afd4-3e16229a2b16.png/v1/fill/w_400,h_1024,strp/battlefield_4___pac_render_by_ashish913_by_ashish_kumar_d6g9sop-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTAyNCIsInBhdGgiOiJcL2ZcLzI1NjI3ZDU4LWQ5OWMtNGFjNy1hNmZlLTdhNGJiMzI5ZjNmNVwvZDZnOXNvcC04N2MzZmY1NC04Yzc1LTQxYTYtYWZkNC0zZTE2MjI5YTJiMTYucG5nIiwid2lkdGgiOiI8PTQwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.Tv8bA6iocpXlUhohWL8qhILMzMQqT21csdMzYGUycu0"
                        alt="" class="product">
                </div>
                <div class="contentBox">
                    <h3>Battlefield 5</h3>
                    <h2 class="price">R$ 60.00</h2>
                    <a href="{{ url('#') }}" class="buy">Comprar</a>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/25627d58-d99c-4ac7-a6fe-7a4bb329f3f5/d6g9sop-87c3ff54-8c75-41a6-afd4-3e16229a2b16.png/v1/fill/w_400,h_1024,strp/battlefield_4___pac_render_by_ashish913_by_ashish_kumar_d6g9sop-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTAyNCIsInBhdGgiOiJcL2ZcLzI1NjI3ZDU4LWQ5OWMtNGFjNy1hNmZlLTdhNGJiMzI5ZjNmNVwvZDZnOXNvcC04N2MzZmY1NC04Yzc1LTQxYTYtYWZkNC0zZTE2MjI5YTJiMTYucG5nIiwid2lkdGgiOiI8PTQwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.Tv8bA6iocpXlUhohWL8qhILMzMQqT21csdMzYGUycu0"
                        alt="" class="product">
                </div>
                <div class="contentBox">
                    <h3>Battlefield 5</h3>
                    <h2 class="price">R$ 60.00</h2>
                    <a href="{{ url('#') }}" class="buy">Comprar</a>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/25627d58-d99c-4ac7-a6fe-7a4bb329f3f5/d6g9sop-87c3ff54-8c75-41a6-afd4-3e16229a2b16.png/v1/fill/w_400,h_1024,strp/battlefield_4___pac_render_by_ashish913_by_ashish_kumar_d6g9sop-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTAyNCIsInBhdGgiOiJcL2ZcLzI1NjI3ZDU4LWQ5OWMtNGFjNy1hNmZlLTdhNGJiMzI5ZjNmNVwvZDZnOXNvcC04N2MzZmY1NC04Yzc1LTQxYTYtYWZkNC0zZTE2MjI5YTJiMTYucG5nIiwid2lkdGgiOiI8PTQwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.Tv8bA6iocpXlUhohWL8qhILMzMQqT21csdMzYGUycu0"
                        alt="" class="product">
                </div>
                <div class="contentBox">
                    <h3>Battlefield 5</h3>
                    <h2 class="price">R$ 60.00</h2>
                    <a href="{{ url('#') }}" class="buy">Comprar</a>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/25627d58-d99c-4ac7-a6fe-7a4bb329f3f5/d6g9sop-87c3ff54-8c75-41a6-afd4-3e16229a2b16.png/v1/fill/w_400,h_1024,strp/battlefield_4___pac_render_by_ashish913_by_ashish_kumar_d6g9sop-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTAyNCIsInBhdGgiOiJcL2ZcLzI1NjI3ZDU4LWQ5OWMtNGFjNy1hNmZlLTdhNGJiMzI5ZjNmNVwvZDZnOXNvcC04N2MzZmY1NC04Yzc1LTQxYTYtYWZkNC0zZTE2MjI5YTJiMTYucG5nIiwid2lkdGgiOiI8PTQwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.Tv8bA6iocpXlUhohWL8qhILMzMQqT21csdMzYGUycu0"
                        alt="" class="product">
                </div>
                <div class="contentBox">
                    <h3>Battlefield 5</h3>
                    <h2 class="price">R$ 60.00</h2>
                    <a href="{{ url('#') }}" class="buy">Comprar</a>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/25627d58-d99c-4ac7-a6fe-7a4bb329f3f5/d6g9sop-87c3ff54-8c75-41a6-afd4-3e16229a2b16.png/v1/fill/w_400,h_1024,strp/battlefield_4___pac_render_by_ashish913_by_ashish_kumar_d6g9sop-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTAyNCIsInBhdGgiOiJcL2ZcLzI1NjI3ZDU4LWQ5OWMtNGFjNy1hNmZlLTdhNGJiMzI5ZjNmNVwvZDZnOXNvcC04N2MzZmY1NC04Yzc1LTQxYTYtYWZkNC0zZTE2MjI5YTJiMTYucG5nIiwid2lkdGgiOiI8PTQwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.Tv8bA6iocpXlUhohWL8qhILMzMQqT21csdMzYGUycu0"
                        alt="" class="product">
                </div>
                <div class="contentBox">
                    <h3>Battlefield 5</h3>
                    <h2 class="price">R$ 60.00</h2>
                    <a href="{{ url('#') }}" class="buy">Comprar</a>
                </div>
            </div>
        </section>
        <h1>Promoções</h1>
        <section class="products">
            <div class="card">
                <div class="imgBox">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/25627d58-d99c-4ac7-a6fe-7a4bb329f3f5/d6g9sop-87c3ff54-8c75-41a6-afd4-3e16229a2b16.png/v1/fill/w_400,h_1024,strp/battlefield_4___pac_render_by_ashish913_by_ashish_kumar_d6g9sop-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTAyNCIsInBhdGgiOiJcL2ZcLzI1NjI3ZDU4LWQ5OWMtNGFjNy1hNmZlLTdhNGJiMzI5ZjNmNVwvZDZnOXNvcC04N2MzZmY1NC04Yzc1LTQxYTYtYWZkNC0zZTE2MjI5YTJiMTYucG5nIiwid2lkdGgiOiI8PTQwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.Tv8bA6iocpXlUhohWL8qhILMzMQqT21csdMzYGUycu0"
                        alt="" class="product">
                </div>
                <div class="contentBox">
                    <h3>Battlefield 5</h3>
                    <h2 class="price">R$ 60.00</h2>
                    <a href="{{ url('#') }}" class="buy">Comprar</a>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/25627d58-d99c-4ac7-a6fe-7a4bb329f3f5/d6g9sop-87c3ff54-8c75-41a6-afd4-3e16229a2b16.png/v1/fill/w_400,h_1024,strp/battlefield_4___pac_render_by_ashish913_by_ashish_kumar_d6g9sop-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTAyNCIsInBhdGgiOiJcL2ZcLzI1NjI3ZDU4LWQ5OWMtNGFjNy1hNmZlLTdhNGJiMzI5ZjNmNVwvZDZnOXNvcC04N2MzZmY1NC04Yzc1LTQxYTYtYWZkNC0zZTE2MjI5YTJiMTYucG5nIiwid2lkdGgiOiI8PTQwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.Tv8bA6iocpXlUhohWL8qhILMzMQqT21csdMzYGUycu0"
                        alt="" class="product">
                </div>
                <div class="contentBox">
                    <h3>Battlefield 5</h3>
                    <h2 class="price">R$ 60.00</h2>
                    <a href="{{ url('#') }}" class="buy">Comprar</a>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/25627d58-d99c-4ac7-a6fe-7a4bb329f3f5/d6g9sop-87c3ff54-8c75-41a6-afd4-3e16229a2b16.png/v1/fill/w_400,h_1024,strp/battlefield_4___pac_render_by_ashish913_by_ashish_kumar_d6g9sop-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTAyNCIsInBhdGgiOiJcL2ZcLzI1NjI3ZDU4LWQ5OWMtNGFjNy1hNmZlLTdhNGJiMzI5ZjNmNVwvZDZnOXNvcC04N2MzZmY1NC04Yzc1LTQxYTYtYWZkNC0zZTE2MjI5YTJiMTYucG5nIiwid2lkdGgiOiI8PTQwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.Tv8bA6iocpXlUhohWL8qhILMzMQqT21csdMzYGUycu0"
                        alt="" class="product">
                </div>
                <div class="contentBox">
                    <h3>Battlefield 5</h3>
                    <h2 class="price">R$ 60.00</h2>
                    <a href="{{ url('#') }}" class="buy">Comprar</a>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/25627d58-d99c-4ac7-a6fe-7a4bb329f3f5/d6g9sop-87c3ff54-8c75-41a6-afd4-3e16229a2b16.png/v1/fill/w_400,h_1024,strp/battlefield_4___pac_render_by_ashish913_by_ashish_kumar_d6g9sop-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTAyNCIsInBhdGgiOiJcL2ZcLzI1NjI3ZDU4LWQ5OWMtNGFjNy1hNmZlLTdhNGJiMzI5ZjNmNVwvZDZnOXNvcC04N2MzZmY1NC04Yzc1LTQxYTYtYWZkNC0zZTE2MjI5YTJiMTYucG5nIiwid2lkdGgiOiI8PTQwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.Tv8bA6iocpXlUhohWL8qhILMzMQqT21csdMzYGUycu0"
                        alt="" class="product">
                </div>
                <div class="contentBox">
                    <h3>Battlefield 5</h3>
                    <h2 class="price">R$ 60.00</h2>
                    <a href="{{ url('#') }}" class="buy">Comprar</a>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/25627d58-d99c-4ac7-a6fe-7a4bb329f3f5/d6g9sop-87c3ff54-8c75-41a6-afd4-3e16229a2b16.png/v1/fill/w_400,h_1024,strp/battlefield_4___pac_render_by_ashish913_by_ashish_kumar_d6g9sop-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTAyNCIsInBhdGgiOiJcL2ZcLzI1NjI3ZDU4LWQ5OWMtNGFjNy1hNmZlLTdhNGJiMzI5ZjNmNVwvZDZnOXNvcC04N2MzZmY1NC04Yzc1LTQxYTYtYWZkNC0zZTE2MjI5YTJiMTYucG5nIiwid2lkdGgiOiI8PTQwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.Tv8bA6iocpXlUhohWL8qhILMzMQqT21csdMzYGUycu0"
                        alt="" class="product">
                </div>
                <div class="contentBox">
                    <h3>Battlefield 5</h3>
                    <h2 class="price">R$ 60.00</h2>
                    <a href="{{ url('#') }}" class="buy">Comprar</a>
                </div>
            </div>
        </section>
        <h1>League of Legends</h1>

        <section class="products">
            <div class="card">
                <div class="imgBox">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/25627d58-d99c-4ac7-a6fe-7a4bb329f3f5/d6g9sop-87c3ff54-8c75-41a6-afd4-3e16229a2b16.png/v1/fill/w_400,h_1024,strp/battlefield_4___pac_render_by_ashish913_by_ashish_kumar_d6g9sop-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTAyNCIsInBhdGgiOiJcL2ZcLzI1NjI3ZDU4LWQ5OWMtNGFjNy1hNmZlLTdhNGJiMzI5ZjNmNVwvZDZnOXNvcC04N2MzZmY1NC04Yzc1LTQxYTYtYWZkNC0zZTE2MjI5YTJiMTYucG5nIiwid2lkdGgiOiI8PTQwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.Tv8bA6iocpXlUhohWL8qhILMzMQqT21csdMzYGUycu0"
                        alt="" class="product">
                </div>
                <div class="contentBox">
                    <h3>Battlefield 5</h3>
                    <h2 class="price">R$ 60.00</h2>
                    <a href="{{ url('#') }}" class="buy">Comprar</a>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="https://valorant-hq.com/wp-content/uploads/2020/06/300px-Agent_Sova_Half.png" alt=""
                        class="product">
                </div>
                <div class="contentBox">
                    <h3>Battlefield 5</h3>
                    <h2 class="price">R$ 60.00</h2>
                    <a href="{{ url('#') }}" class="buy">Comprar</a>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/25627d58-d99c-4ac7-a6fe-7a4bb329f3f5/d6g9sop-87c3ff54-8c75-41a6-afd4-3e16229a2b16.png/v1/fill/w_400,h_1024,strp/battlefield_4___pac_render_by_ashish913_by_ashish_kumar_d6g9sop-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTAyNCIsInBhdGgiOiJcL2ZcLzI1NjI3ZDU4LWQ5OWMtNGFjNy1hNmZlLTdhNGJiMzI5ZjNmNVwvZDZnOXNvcC04N2MzZmY1NC04Yzc1LTQxYTYtYWZkNC0zZTE2MjI5YTJiMTYucG5nIiwid2lkdGgiOiI8PTQwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.Tv8bA6iocpXlUhohWL8qhILMzMQqT21csdMzYGUycu0"
                        alt="" class="product">
                </div>
                <div class="contentBox">
                    <h3>Battlefield 5</h3>
                    <h2 class="price">R$ 60.00</h2>
                    <a href="{{ url('#') }}" class="buy">Comprar</a>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/25627d58-d99c-4ac7-a6fe-7a4bb329f3f5/d6g9sop-87c3ff54-8c75-41a6-afd4-3e16229a2b16.png/v1/fill/w_400,h_1024,strp/battlefield_4___pac_render_by_ashish913_by_ashish_kumar_d6g9sop-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTAyNCIsInBhdGgiOiJcL2ZcLzI1NjI3ZDU4LWQ5OWMtNGFjNy1hNmZlLTdhNGJiMzI5ZjNmNVwvZDZnOXNvcC04N2MzZmY1NC04Yzc1LTQxYTYtYWZkNC0zZTE2MjI5YTJiMTYucG5nIiwid2lkdGgiOiI8PTQwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.Tv8bA6iocpXlUhohWL8qhILMzMQqT21csdMzYGUycu0"
                        alt="" class="product">
                </div>
                <div class="contentBox">
                    <h3>Battlefield 5</h3>
                    <h2 class="price">R$ 60.00</h2>
                    <a href="{{ url('#') }}" class="buy">Comprar</a>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="https://cdn130.picsart.com/333353635026211.png" alt="" class="product">
                </div>
                <div class="contentBox">
                    <h3>Battlefield 2042</h3>
                    <h2 class="price">R$ 60.00</h2>
                    <a href="{{ url('#') }}" class="buy">Comprar</a>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; ECOIN - SENAC - 2022</p>
    </footer>

</body>

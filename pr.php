<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .card-body {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    width: 100%;
    max-width: 800px;
    margin: 20px auto;
    border: 1px solid #ccc;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
  }

  .inside-body {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 20px;
    width: 100%;
  }

  .img {
    flex: 0 0 150px;
  }

  .img img {
    width: 100%;
    height: auto;
    border-radius: 8px;
  }

  .text {
    flex: 1;
  }

  .text h1 {
    margin: 0;
    font-size: 1.5rem;
    color: #333;
  }

  .text p {
    margin-top: 10px;
    font-size: 1rem;
    color: #666;
    line-height: 1.5;
  }

  /* Responsive Design */
  @media (max-width: 600px) {
    .inside-body {
      flex-direction: column;
      text-align: center;
    }

    .img {
      flex: 0 0 auto;
      width: 80%;
    }
  }
    </style>
</head>

<body>

    <h1>Hello I am developer</h1>

    <div class="card-body">
        <div class="inside-body">
            <div class="img">
                <img src="./assets/images/education-pro/T1.jpg" alt="T1" />
            </div>
            <div class="text">
                <h1>Hello</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In minima quo sunt nobis numquam voluptatum
                    assumenda, vero et repellat dolorem ducimus quia consequuntur inventore ipsa voluptatem!
                </p>
            </div>
        </div>
    </div>
    <script>
    function reverseString(str) {
        return str.split('').reverse().join('');
    }

    const reversedString = reverseString('Hello, World!');
    console.log(reversedString);


    function isPalimdrome(str) {
        if (typeof str !== 'string') return false;
        return str === str.split('').reverse().join('');
    }
    const palim = isPalimdrome('malayalam');
    console.log(palim);
    </script>

</body>

</html>
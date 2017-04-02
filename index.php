<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <title>VUE JS PROJECT BASIC</title>
</head>
<body>

<div class="container">
    <div id="app">
        <h2>{{ message }}</h2>
        <div v-if="seen">
            <div class="form-group">
                <input type="text" v-model="message">
            </div>
        </div>
        <button v-on:click="showInput" class="btn" v-bind:class="{ 'btn-danger': seen, 'btn-success': !seen }">{{
            textInput }}
        </button>
    </div>
    <div id="app2">
        <ul>
            <li v-for="todo in todos">
                {{ todo.text }}
            </li>
        </ul>
    </div>
    <div id="app3">
        <p>{{ message }}</p>
        <button v-on:click="reverseMessage">Reverse Message</button>
    </div>
    <div id="firstComponent">
        <ul>
            <todo-item v-for="item in groceryList" v-bind:todo="item"></todo-item>
        </ul>
    </div>
</div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/vue"></script>
<script src="js/components.js"></script>
</body>
</html>
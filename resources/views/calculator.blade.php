<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <!-- Display validation errors -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Calculator form -->
    <form action="{{ route('calc') }}" method="POST">
        @csrf
        <div>
            <input type="number" step="any" placeholder="Enter first number" name="num1" value="{{ old('num1') }}" required />
        </div>
        <div>
            <input type="number" step="any" placeholder="Enter second number" name="num2" value="{{ old('num2') }}" required />
        </div>

        <div>
            <label>Choose an operation</label><br>
            <select name="operation" id="operation" required>
                <option value="+" {{ old('operation') == '+' ? 'selected' : '' }}>Addition (+)</option>
                <option value="-" {{ old('operation') == '-' ? 'selected' : '' }}>Subtraction (-)</option>
                <option value="*" {{ old('operation') == '*' ? 'selected' : '' }}>Multiplication (*)</option>
                <option value="/" {{ old('operation') == '/' ? 'selected' : '' }}>Division (/)</option>
            </select>
        </div>

        <div>
            <button type="submit">Calculate</button>
        </div>
    </form>

    <!-- Display the result if available -->
    @if (isset($result))
        <h2>Result: {{ $result }}</h2>
    @endif
</body>
</html>

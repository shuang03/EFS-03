@extends('app')
@section('content')
    <h1>Investment </h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Investment Category</td>
                <td><?php echo ($investment['catagory']); ?></td>
            </tr>
            <tr>
                <td>Investment Description</td>
                <td><?php echo ($investment['description']); ?></td>
            </tr>
            <tr>
                <td>Investment Acquired Value</td>
                <td><?php echo ($investment['acquired_value']); ?></td>
            </tr>
            <tr>
                <td>Investment Acquired Date </td>
                <td><?php echo ($investment['acquired_date']); ?></td>
            </tr>
            <tr>
                <td>Investment Recent Value</td>
                <td><?php echo ($investment['recent_value']); ?></td>
            </tr>
            <tr>
                <td>Investment Recent Date</td>
                <td><?php echo ($investment['recent_date']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
@stop


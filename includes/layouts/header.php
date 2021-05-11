<?php
require_once ('../../core/init.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME; ?></title>
    <link rel="stylesheet" href="/public/styles.min.css">
</head>

<body class="bg-white">
    <div class="root">
        <nav class="flex flex-wrap items-start justify-between p-5 bg-gray-800 w-100 min-w-100 text-white filter drop-shadow-2xl">
            <a href="#">Vantage Portal Solutions</a>
            <ul class="flex flex-start justify-between divide-x divide-white">
                <li class="px-3 cursor-pointer">Home</li>
                <li class="px-3 cursor-pointer">Dashboard</li>
                <li class="px-3 cursor-pointer">Bulletin</li>
                <li class="px-3 cursor-pointer">Apps</li>
                <li class="px-3 cursor-pointer">My Account</li>
            </ul>
        </nav>
        <div class="container  mx-auto">
            <div class="mt-6 flex flex-wrap items-start justify-between border-b-2 pb-2">
                <div>
                    <p class="text-gray-500 text-sm">Welcome!</p>
                    <h1 class="text-gray-700 font-bold text-3xl">User Admin 999</h1>
                </div>
                <div class="flex flex-col items-end">
                    <p class="text-gray-500 text-sm">Last Login: April 30,2021 - 09:00PM</p>
                    <p class="text-gray-500 text-sm">Session will expire in 29:25</p>
                    <div class="flex-row divide-x divide-green-800 ">
                        <a href="#" class="text-green-800 font-bold px-3 underline">Activity Log</a>
                        <a href="#" class="text-green-800 font-bold px-3 underline">Set this as my homepage</a>
                    </div>
                </div>
            </div>


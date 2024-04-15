@extends('layouts.layout')

@section('title', 'dashboard')
@section('content')
<aside class="w-64 border-r border-gray-200">
    <div class="flex flex-col h-full">
      <a href="#" class="flex items-center gap-4 p-4 border-b border-gray-200">
        <i class="fa fa-home text-2xl text-blue-500"></i>
        <span>Dashboard</span>
      </a>
      <div class="flex flex-col gap-4 p-4">
        <h3 class="font-bold text-gray-600">Shop</h3>
        <a href="#" class="flex items-center gap-4 rounded-md px-4 py-2 text-gray-600 hover:bg-gray-100">
          <i class="fa fa-caret-right text-gray-400"></i>
          <span>Products</span>
        </a>
        <a href="#" class="flex items-center gap-4 rounded-md px-4 py-2 text-gray-600 hover:bg-gray-100">
          <i class="fa fa-caret-right text-gray-400"></i>
          <span>Orders</span>
        </a>
        <a href="#" class="flex items-center gap-4 rounded-md px-4 py-2 text-gray-600 hover:bg-gray-100">
          <i class="fa fa-caret-right text-gray-400"></i>
          <span>Customers</span>
        </a>
      </div>
      <div class="flex flex-col gap-4 p-4">
        <h3 class="font-bold text-gray-600">Blog</h3>
        <a href="#" class="flex items-center gap-4 rounded-md px-4 py-2 text-gray-600 hover:bg-gray-100">
          <i class="fa fa-caret-right text-gray-400"></i>
          <span>Posts</span>
        </a>
        <a href="#" class="flex items-center gap-4 rounded-md px-4 py-2 text-gray-600 hover:bg-gray-100">
          <i class="fa fa-caret-right text-gray-400"></i>
          <span>Categories</span>
        </a>
        <a href="#" class="flex items-center gap-4 rounded-md px-4 py-2 text-gray-600 hover:bg-gray-100">
          <i class="fa fa-caret-right text-gray-400"></i>
          <span>Authors</span>
        </a>
      </div>
      <div class="flex flex-col gap-4 p-4">
        <h3 class="font-bold text-gray-600">Links</h3>
      </div>
    </div>
  </aside>
  <section class="flex-1 p-4">
    <div class="flex items-center justify-between gap-4 mb-4">
      <h2 class="text-2xl font-bold text-gray-800">Dashboard</h2>
      <div class="flex items-center gap-4">
        <label for="start-date" class="text-gray-600">Start date</label>
        <input type="date" id="start-date" class="rounded-md border border-gray-300 px-4 py-2">
        <label for="end-date" class="text-gray-600">End date</label>
        <input type="date" id="end-date" class="rounded-md border border-gray-300 px-4 py-2">
      </div>
    </div>
    <div class="grid grid-cols-1 gap-4 mb-4">
      <div class="bg-white rounded-md shadow-md p-4">
        <div class="flex items-center justify-between">
          <h3 class="text-lg font-bold text-gray-800">Welcome Back!</h3>
          <button type="button" class="flex items-center gap-2 rounded-full bg-blue-500 px-4 py-2 text-white">
            <i class="fa fa-sign-out-alt"></i>
            Sign out
          </button>
        </div>
        <div class="mt-4">
          <div class="flex items-center gap-4">
            <div class="w-10 h-10 rounded-full bg-blue-500"></div>
            <div>
              <p class="text-sm font-bold text-gray-800">Osamah</p>
              <p class="text-xs text-gray-600">osamah@example.com</p>
            </div>
          </div>
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="bg-white rounded-md shadow-md p-4">
          <div class="flex items-center justify-between">
            <h3 class="text-lg font-bold text-gray-800">Revenue</h3>
            <p class="text-sm text-gray-600">40K increase</p>
          </div>
          <div class="mt-4">
            <div class="chart">
              <canvas id="revenue-chart" width="400" height="200"></canvas>
            </div>
          </div>
        </div>
        <div class="bg-white rounded-md shadow-md p-4">
          <div class="flex items-center justify-between">
            <h3 class="text-lg font-bold text-gray-800">New customers</h3>
            <p class="text-sm text-red-600">5% decrease</p>
          </div>
          <div class="mt-4">
            <div class="chart">
              <canvas id="new-customers-chart" width="400" height="200"></canvas>
            </div>
          </div>
        </div>
        <div class="bg-white rounded-md shadow-md p-4">
          <div class="flex items-center justify-between">
            <h3 class="text-lg font-bold text-gray-800">New orders</h3>
            <p class="text-sm text-green-600">30% increase</p>
          </div>
          <div class="mt-4">
            <div class="chart">
              <canvas id="new-orders-chart" width="400" height="200"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div class="bg-white rounded-md shadow-md p-4">
        <h3 class="text-lg font-bold text-gray-800">Orders per month</h3>
        <div class="mt-4">
          <div class="chart">
            <canvas id="orders-per-month-chart" width="400" height="200"></canvas>
          </div>
        </div>
      </div>
      <div class="bg-white rounded-md shadow-md p-4">
        <h3 class="text-lg font-bold text-gray-800">Total customers</h3>
        <div class="mt-4">
          <div class="chart">
            <canvas id="total-customers-chart" width="400" height="200"></canvas>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
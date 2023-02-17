<script setup>
import {Link} from '@inertiajs/inertia-vue3'

defineProps({
    items: Array
})

</script>

<template>
    <nav class="container flex justify-around py-8 mx-auto bg-white">
  <div>
    <h3 class="text-2xl font-medium text-blue-500">ACEJOY INVENTORY SYSTEM</h3>
  </div>
  <div class="space-x-8">
    <Link href="/">Home</Link>
    <Link href="/employees">Employees</Link>
    <Link href="/offices">Offices</Link>
    <Link href="/items">Items</Link>
  </div>
</nav>

<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full">
          <thead class="border-b">
            <tr>
              <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                #
              </th>
              <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                Office Name
              </th>
              <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                Name
              </th>
              <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                Description
              </th>
              <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                Value
              </th>
              <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                Status
              </th>
              <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                Date Acquired
              </th>
            </tr>
          </thead>
          <tbody v-for="item of items" :key="item.id">
            <tr class="border-b">
              <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">{{item.id}}</td>
              <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                {{item.offices.id}}
              </td>
              <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                {{item.name}}
              </td>
              <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                {{item.description}}
              </td>
              <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                {{item.value}}
              </td>
              <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                {{item.status}}
              </td>
              <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">
                {{item.date_acquired}}
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</template>
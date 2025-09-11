<div>
    <div class="bg-white border rounded-lg mt-3">
        <div class="container mx-auto px-4 py-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
                    <p class="mt-1 text-sm text-gray-500">Welcome back, {{ auth()->user()->name }} {{ auth()->user()->surname }} ({{ auth()->user()->accounttype->name }})</p>
                </div>
                
            </div>
        </div>
    </div>
   <!-- Main Content -->
   <div class="container mx-auto px-4 py-8">
    <!-- Stats Overview -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Total Registrations -->
        <x-card class="bg-white border-l-4 border-blue-500">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500">Total Registrations</p>
                    <p class="text-2xl font-bold text-gray-800">1,248</p>
                    <div class="flex items-center mt-1">
                        <span class="text-green-500 text-xs font-medium flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                            </svg>
                            12.5%
                        </span>
                        <span class="text-xs text-gray-500 ml-1">from last month</span>
                    </div>
                </div>
            </div>
        </x-card>

        <!-- Pending Approvals -->
        <x-card class="bg-white border-l-4 border-yellow-500">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-100 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500">Pending Approvals</p>
                    <p class="text-2xl font-bold text-gray-800">42</p>
                    <div class="flex items-center mt-1">
                        <span class="text-red-500 text-xs font-medium flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                            </svg>
                            8.4%
                        </span>
                        <span class="text-xs text-gray-500 ml-1">from last month</span>
                    </div>
                </div>
            </div>
        </x-card>

        <!-- Revenue -->
        <x-card class="bg-white border-l-4 border-green-500">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500">Revenue</p>
                    <p class="text-2xl font-bold text-gray-800">$24,563</p>
                    <div class="flex items-center mt-1">
                        <span class="text-green-500 text-xs font-medium flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                            </svg>
                            18.2%
                        </span>
                        <span class="text-xs text-gray-500 ml-1">from last month</span>
                    </div>
                </div>
            </div>
        </x-card>

        <!-- Certificates Issued -->
        <x-card class="bg-white border-l-4 border-purple-500">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-purple-100 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500">Certificates Issued</p>
                    <p class="text-2xl font-bold text-gray-800">876</p>
                    <div class="flex items-center mt-1">
                        <span class="text-green-500 text-xs font-medium flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                            </svg>
                            5.3%
                        </span>
                        <span class="text-xs text-gray-500 ml-1">from last month</span>
                    </div>
                </div>
            </div>
        </x-card>
    </div>

    <!-- Main Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Left Column -->
        <div class="lg:col-span-2 space-y-8">
            <!-- Recent Applications -->
            <x-card title="Recent Applications" separator>
                <div class="overflow-x-auto">
                    <table class="table table-zebra w-full">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Profession</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="font-medium">John Smith</td>
                                <td>Medical Laboratory Scientist</td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td>Aug 20, 2025</td>
                                <td>
                                    <x-button icon="o-eye" class="btn-sm btn-ghost" />
                                </td>
                            </tr>
                            <tr>
                                <td class="font-medium">Sarah Johnson</td>
                                <td>Phlebotomist</td>
                                <td><span class="badge badge-success">Approved</span></td>
                                <td>Aug 19, 2025</td>
                                <td>
                                    <x-button icon="o-eye" class="btn-sm btn-ghost" />
                                </td>
                            </tr>
                            <tr>
                                <td class="font-medium">Michael Brown</td>
                                <td>Cytotechnologist</td>
                                <td><span class="badge badge-error">Rejected</span></td>
                                <td>Aug 18, 2025</td>
                                <td>
                                    <x-button icon="o-eye" class="btn-sm btn-ghost" />
                                </td>
                            </tr>
                            <tr>
                                <td class="font-medium">Emily Davis</td>
                                <td>Histotechnologist</td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td>Aug 17, 2025</td>
                                <td>
                                    <x-button icon="o-eye" class="btn-sm btn-ghost" />
                                </td>
                            </tr>
                            <tr>
                                <td class="font-medium">Robert Wilson</td>
                                <td>Clinical Laboratory Technician</td>
                                <td><span class="badge badge-success">Approved</span></td>
                                <td>Aug 16, 2025</td>
                                <td>
                                    <x-button icon="o-eye" class="btn-sm btn-ghost" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <x-slot:actions>
                    <x-button label="View All" class="btn-ghost" />
                </x-slot:actions>
            </x-card>

            <!-- Registration Analytics -->
            <x-card title="Registration Analytics" separator>
                <div class="h-80">
                    <!-- Chart would go here - using placeholder -->
                    <div class="h-full w-full bg-gray-100 rounded-lg flex items-center justify-center">
                        <div class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            <p class="mt-2 text-gray-500">Registration trend over time</p>
                        </div>
                    </div>
                </div>
            </x-card>
        </div>

        <!-- Right Column -->
        <div class="space-y-8">
            <!-- Quick Actions -->
            <x-card title="Quick Actions" separator>
                <div class="space-y-4">
                    <x-button label="New Registration" icon="o-user-plus" class="btn-primary w-full justify-start" />
                    <x-button label="Review Applications" icon="o-clipboard-document-check" class="btn-outline w-full justify-start" />
                    <x-button label="Issue Certificate" icon="o-document-check" class="btn-outline w-full justify-start" />
                    <x-button label="Process Payment" icon="o-credit-card" class="btn-outline w-full justify-start" />
                    <x-button label="Generate Reports" icon="o-chart-bar" class="btn-outline w-full justify-start" />
                </div>
            </x-card>

            <!-- Recent Activity -->
            <x-card title="Recent Activity" separator>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Certificate issued to Sarah Johnson</p>
                            <p class="text-xs text-gray-500">10 minutes ago</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-green-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Payment received from Robert Wilson</p>
                            <p class="text-xs text-gray-500">25 minutes ago</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-yellow-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">New application from John Smith</p>
                            <p class="text-xs text-gray-500">1 hour ago</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-red-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Application rejected for Michael Brown</p>
                            <p class="text-xs text-gray-500">2 hours ago</p>
                        </div>
                    </div>
                </div>
                <x-slot:actions>
                    <x-button label="View All" class="btn-ghost" />
                </x-slot:actions>
            </x-card>

            <!-- Profession Distribution -->
            <x-card title="Profession Distribution" separator>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium text-gray-700">Medical Laboratory Scientist</span>
                            <span class="text-sm font-medium text-gray-700">45%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: 45%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium text-gray-700">Phlebotomist</span>
                            <span class="text-sm font-medium text-gray-700">25%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 25%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium text-gray-700">Cytotechnologist</span>
                            <span class="text-sm font-medium text-gray-700">15%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 15%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium text-gray-700">Histotechnologist</span>
                            <span class="text-sm font-medium text-gray-700">10%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-purple-500 h-2 rounded-full" style="width: 10%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium text-gray-700">Other</span>
                            <span class="text-sm font-medium text-gray-700">5%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-gray-500 h-2 rounded-full" style="width: 5%"></div>
                        </div>
                    </div>
                </div>
            </x-card>
        </div>
    </div>
</div>
</div>

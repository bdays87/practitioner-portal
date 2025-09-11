<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative bg-blue-600 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                Medical Laboratory
                <span class="block text-blue-200">Professionals Registration</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                Your gateway to professional certification and career advancement
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#registration-steps" class="bg-white text-blue-600 font-semibold px-8 py-4 rounded-lg hover:bg-gray-100 transition duration-300">
                    Start Registration
                </a>
                <a href="#certificate-verification" class="border-2 border-white text-white font-semibold px-8 py-4 rounded-lg hover:bg-white hover:text-blue-600 transition duration-300">
                    Verify Certificate
                </a>
            </div>
        </div>
    </div>
    
    <!-- Registration Steps Section -->
    <section id="registration-steps" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Registration Process</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Complete these simple steps to register as a certified medical laboratory professional
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6">
                <!-- Step 1 -->
                <div class="bg-blue-50 rounded-lg p-6 text-center hover:shadow-lg transition duration-300">
                    <div class="bg-blue-600 text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-xl font-bold">1</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Account Creation</h3>
                    <p class="text-gray-600 mb-4">Register and create your personal account</p>
                    <a href="{{ route('register') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                        Start Here
                    </a>
                </div>
                
                <!-- Step 2 -->
                <div class="bg-indigo-50 rounded-lg p-6 text-center hover:shadow-lg transition duration-300">
                    <div class="bg-indigo-600 text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-xl font-bold">2</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Profession Selection</h3>
                    <p class="text-gray-600">Choose your specific laboratory profession</p>
                </div>
                
                <!-- Step 3 -->
                <div class="bg-purple-50 rounded-lg p-6 text-center hover:shadow-lg transition duration-300">
                    <div class="bg-purple-600 text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-xl font-bold">3</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Document Upload</h3>
                    <p class="text-gray-600">Submit required certificates and identification</p>
                </div>
                
                <!-- Step 4 -->
                <div class="bg-green-50 rounded-lg p-6 text-center hover:shadow-lg transition duration-300">
                    <div class="bg-green-600 text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-xl font-bold">4</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Qualifications Review</h3>
                    <p class="text-gray-600">Verification of your professional qualifications</p>
                </div>
                
                <!-- Step 5 -->
                <div class="bg-orange-50 rounded-lg p-6 text-center hover:shadow-lg transition duration-300">
                    <div class="bg-orange-600 text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-xl font-bold">5</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Payment</h3>
                    <p class="text-gray-600">Complete registration fee payment</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Banking Details Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Banking Details</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Use the following banking information for registration fee payments
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Bank Name</h3>
                        <p class="text-gray-600">National Medical Bank</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Account Name</h3>
                        <p class="text-gray-600">Medical Laboratory Council</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Account Number</h3>
                        <p class="text-gray-600">1234-5678-9012-3456</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Branch Code</h3>
                        <p class="text-gray-600">012345</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Reference</h3>
                        <p class="text-gray-600">Your ID Number + REG</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Swift Code</h3>
                        <p class="text-gray-600">MEDLABXXX</p>
                    </div>
                </div>
                
                <div class="mt-8 p-4 bg-blue-50 rounded-lg">
                    <p class="text-sm text-gray-600">
                        Please use your ID number as a reference when making payments. After payment, upload your proof of payment in the payment section of your application.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Certificate Verification Section -->
    <section id="certificate-verification" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Certificate Verification</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Verify the authenticity of a medical laboratory professional's certification
                </p>
            </div>
            
            <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg p-8">
                <form class="space-y-6">
                    <div>
                        <label for="certificate-number" class="block text-sm font-medium text-gray-700 mb-2">Certificate Number</label>
                        <input type="text" id="certificate-number" name="certificate-number" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" 
                               placeholder="Enter certificate number">
                    </div>
                    
                    <div>
                        <label for="id-number" class="block text-sm font-medium text-gray-700 mb-2">ID Number</label>
                        <input type="text" id="id-number" name="id-number" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" 
                               placeholder="Enter ID number">
                    </div>
                    
                    <div class="flex justify-center">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg transition duration-300">
                            Verify Certificate
                        </button>
                    </div>
                </form>
            </div>
            
            <div class="mt-8 bg-gray-50 rounded-lg p-6 max-w-3xl mx-auto">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Why Verify?</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mt-0.5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-600">Ensure the professional is properly certified</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mt-0.5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-600">Confirm the certification is current and valid</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mt-0.5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-600">Protect against fraudulent certification claims</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">Medical Laboratory Council</h3>
                    <p class="text-blue-200">Ensuring quality and standards in medical laboratory practice</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Contact Us</h3>
                    <ul class="space-y-2 text-blue-200">
                        <li>Email: contact@medlabcouncil.org</li>
                        <li>Phone: +263 (123) 456-7890</li>
                        <li>Address: 123 Medical Plaza, Harare, Zimbabwe</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">About Us</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">FAQs</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Privacy Policy</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-blue-800 mt-8 pt-8 text-center text-blue-200">
                <p>&copy; {{ date('Y') }} Medical Laboratory & Clinical Scientists Council of Zimbabwe. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div>

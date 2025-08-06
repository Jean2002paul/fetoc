@extends('layouts.public')

@section('title', 'Nos Disciplines - FETOC')

@section('content')
    <div class="flex flex-col">
        <!-- Hero Section -->
        <section class="bg-gradient-to-br from-green-500 to-teal-600 text-white py-20">
            <div class="container mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Nos Disciplines</h1>
                <p class="text-xl md:text-2xl opacity-90 max-w-4xl mx-auto">Du Canoë au Dragon Boat, découvrez les sports que nous encadrons.</p>
            </div>
        </section>

        <main class="container mx-auto px-6 py-16 flex-grow">
            <!-- 4. Section Disciplines Associées -->
            <section id="disciplines" class="bg-gradient-to-br from-gray-50 to-white p-12 rounded-3xl shadow-2xl border border-gray-100">
                <div class="max-w-6xl mx-auto">
                    <!-- Canoë -->
                    <div class="mb-12 bg-white p-8 rounded-2xl shadow-lg border border-gray-100">...</div>
                    <!-- Kayak -->
                    <div class="mb-12 bg-white p-8 rounded-2xl shadow-lg border border-gray-100">...</div>
                    <!-- Autres Disciplines -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">...</div>
                </div>
            </section>
        </main>
    </div>
@endsection
@extends('layouts.user.app')
@section('title', 'Track Your Progress')
@section('content')
<div class="min-h-screen bg-white">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Progress Tracker</h1>
            <p class="mt-1 text-sm text-gray-500">Monitor your fitness journey with detailed insights and trends</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <div class="bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Current Weight</p>
                        <h3 class="text-2xl font-bold text-gray-900">75.5 kg</h3>
                    </div>
                    <div class="bg-blue-100 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                        </svg>
                    </div>
                </div>
                <div class="flex items-center mt-2">
                    <span class="text-sm text-green-600 font-medium flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                        0.8 kg
                    </span>
                    <span class="text-xs text-gray-500 ml-2">since last week</span>
                </div>
            </div>

            <div class="bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Current BMI</p>
                        <h3 class="text-2xl font-bold text-gray-900">23.5</h3>
                    </div>
                    <div class="bg-green-100 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-2">
                    <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Normal</span>
                </div>
            </div>

            <div class="bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Workout Adherence</p>
                        <h3 class="text-2xl font-bold text-gray-900">82%</h3>
                    </div>
                    <div class="bg-purple-100 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                </div>
                <div class="mt-2">
                    <span class="text-sm text-gray-500">9 of 11 workouts completed</span>
                </div>
            </div>

            <div class="bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Daily Calories</p>
                        <h3 class="text-2xl font-bold text-gray-900">2,150</h3>
                    </div>
                    <div class="bg-orange-100 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <div class="flex items-center mt-2">
                    <span class="text-sm text-yellow-600 font-medium flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
                        </svg>
                        98%
                    </span>
                    <span class="text-xs text-gray-500 ml-2">of target</span>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden">
                    <div class="bg-blue-600 text-white px-4 py-3 flex justify-between items-center">
                        <h3 class="font-semibold text-lg flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                            Weight Trend
                        </h3>
                        <div class="flex space-x-2">
                            <button class="px-2 py-1 text-xs bg-blue-500 hover:bg-blue-700 rounded-md">Week</button>
                            <button class="px-2 py-1 text-xs bg-blue-700 hover:bg-blue-700 rounded-md">Month</button>
                            <button class="px-2 py-1 text-xs bg-blue-500 hover:bg-blue-700 rounded-md">Year</button>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="h-64">
                            <canvas id="weightChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden">
                    <div class="bg-green-600 text-white px-4 py-3 flex justify-between items-center">
                        <h3 class="font-semibold text-lg flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            BMI Trend
                        </h3>
                        <div class="flex space-x-2">
                            <button class="px-2 py-1 text-xs bg-green-500 hover:bg-green-700 rounded-md">Week</button>
                            <button class="px-2 py-1 text-xs bg-green-700 hover:bg-green-700 rounded-md">Month</button>
                            <button class="px-2 py-1 text-xs bg-green-500 hover:bg-green-700 rounded-md">Year</button>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="h-64">
                            <canvas id="bmiChart"></canvas>
                        </div>
                        <div class="flex justify-between mt-2 text-xs text-gray-600">
                            <span>Underweight</span>
                            <span>Normal</span>
                            <span>Overweight</span>
                            <span>Obese</span>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden">
                        <div class="bg-purple-600 text-white px-4 py-3">
                            <h3 class="font-semibold text-lg flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                                Workout Adherence
                            </h3>
                        </div>
                        <div class="p-4">
                            <div class="h-48 flex items-center justify-center">
                                <canvas id="workoutChart"></canvas>
                            </div>
                            <div class="mt-4 text-center">
                                <p class="text-sm text-gray-500">Last 30 days: 28 scheduled, 23 completed</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden">
                        <div class="bg-orange-600 text-white px-4 py-3">
                            <h3 class="font-semibold text-lg flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                </svg>
                                Nutrition Summary
                            </h3>
                        </div>
                        <div class="p-4">
                            <div class="h-48 flex items-center justify-center">
                                <canvas id="nutritionChart"></canvas>
                            </div>
                            <div class="grid grid-cols-3 gap-2 mt-4 text-center">
                                <div class="bg-pink-50 rounded-lg p-2">
                                    <h5 class="text-sm font-semibold text-pink-600">134g</h5>
                                    <p class="text-xs text-gray-600">Protein</p>
                                </div>
                                <div class="bg-blue-50 rounded-lg p-2">
                                    <h5 class="text-sm font-semibold text-blue-600">245g</h5>
                                    <p class="text-xs text-gray-600">Carbs</p>
                                </div>
                                <div class="bg-yellow-50 rounded-lg p-2">
                                    <h5 class="text-sm font-semibold text-yellow-600">72g</h5>
                                    <p class="text-xs text-gray-600">Fat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden">
                    <div class="bg-blue-600 text-white px-4 py-3">
                        <h3 class="font-semibold text-lg flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Log New Weight
                        </h3>
                    </div>
                    <div class="p-4">
                        <form action="#" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="weight" class="block text-sm font-medium text-gray-700 mb-1">Weight (kg)</label>
                                <input type="number" name="weight" id="weight" step="0.1" min="30" max="300" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
                            </div>
                            <div class="mb-4">
                                <label for="log_date" class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                                <input type="date" name="log_date" id="log_date" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" value="{{ date('Y-m-d') }}" required>
                            </div>
                            <div class="mb-4">
                                <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Notes (optional)</label>
                                <textarea name="notes" id="notes" rows="2" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Save Weight
                            </button>
                        </form>
                    </div>
                </div>

                <div class="bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden">
                    <div class="bg-gray-50 px-4 py-3 border-b border-gray-200">
                        <h3 class="font-semibold text-gray-800">Recent Weight History</h3>
                    </div>
                    <div class="divide-y divide-gray-200 max-h-96 overflow-y-auto">
                        {{-- Dummy Data - Replace with dynamic data from backend --}}
                        @for ($i = 0; $i < 5; $i++)
                        <div class="px-4 py-3 flex justify-between items-center hover:bg-gray-50">
                            <div>
                                <p class="font-medium text-gray-800">{{ 75.5 - ($i * 0.3) }} kg</p>
                                <p class="text-xs text-gray-500">{{ date('M d, Y', strtotime("-$i day")) }}</p>
                            </div>
                            <div class="flex items-center">
                                @if($i % 2 == 0)
                                <span class="text-xs text-green-600 font-medium flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                    </svg>
                                    0.{{ rand(2,5) }} kg
                                </span>
                                @else
                                <span class="text-xs text-red-600 font-medium flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                                    </svg>
                                    0.{{ rand(1,3) }} kg
                                </span>
                                @endif
                            </div>
                        </div>
                        @endfor
                         <div class="px-4 py-3 flex justify-between items-center hover:bg-gray-50">
                            <div>
                                <p class="font-medium text-gray-800">74.3 kg</p>
                                <p class="text-xs text-gray-500">May 07, 2025</p>
                            </div>
                            <div class="flex items-center">
                                <span class="text-xs text-red-600 font-medium flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                                    </svg>
                                    0.2 kg
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 border-t border-gray-200 text-center">
                        <a href="#" class="text-sm text-blue-600 hover:text-blue-800 font-medium">View Full History</a>
                    </div>
                </div>

                <div class="bg-blue-50 rounded-lg border border-blue-200 p-4">
                    <h4 class="font-semibold text-blue-800 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Insight
                    </h4>
                    <p class="mt-2 text-sm text-blue-700">
                        You're making steady progress! Your weight has been trending down consistently over the past 2 weeks, and your workout consistency is improving.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
{{-- You might need the chartjs-plugin-annotation for the BMI chart lines --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/1.4.0/chartjs-plugin-annotation.min.js"></script> --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Helper function to get min value for chart, ensuring it's not too cramped
        function getChartMin(dataValues, buffer = 2) {
            if (!dataValues || dataValues.length === 0) return 0;
            const minVal = Math.min(...dataValues);
            return Math.floor(minVal - buffer);
        }

        // Helper function to get max value for chart, ensuring it's not too cramped
        function getChartMax(dataValues, buffer = 2) {
            if (!dataValues || dataValues.length === 0) return 30; // Default for BMI perhaps
            const maxVal = Math.max(...dataValues);
            return Math.ceil(maxVal + buffer);
        }

        // Weight Chart
        const weightCtx = document.getElementById('weightChart')?.getContext('2d');
        if (weightCtx) {
            const weightData = [76.5, 76.2, 75.9, 75.8, 75.1, 74.3, 74.9, 74.7, 75.0, 75.5];
            const weightChart = new Chart(weightCtx, {
                type: 'line',
                data: {
                    labels: ['Apr 15', 'Apr 18', 'Apr 21', 'Apr 24', 'Apr 27', 'Apr 30', 'May 3', 'May 6', 'May 9', 'May 12'],
                    datasets: [{
                        label: 'Weight (kg)',
                        data: weightData,
                        borderColor: 'rgb(59, 130, 246)',
                        backgroundColor: 'rgba(59, 130, 246, 0.1)',
                        borderWidth: 2,
                        tension: 0.3, // Smoother curve
                        fill: true,
                        pointBackgroundColor: 'rgb(59, 130, 246)',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: 'rgb(59, 130, 246)'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                            callbacks: {
                                label: function(context) {
                                    return `${context.dataset.label}: ${context.parsed.y} kg`;
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: false,
                            min: getChartMin(weightData, 2),
                            max: getChartMax(weightData, 2),
                            ticks: {
                                callback: function(value) {
                                    return value + ' kg';
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false // Hide vertical grid lines
                            }
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    }
                }
            });
        }

        // BMI Chart
        const bmiCtx = document.getElementById('bmiChart')?.getContext('2d');
        if (bmiCtx) {
            const bmiData = [24.3, 24.2, 24.0, 23.9, 23.8, 23.6, 23.7, 23.6, 23.5, 23.5];
            const bmiChart = new Chart(bmiCtx, {
                type: 'line',
                data: {
                    labels: ['Apr 15', 'Apr 18', 'Apr 21', 'Apr 24', 'Apr 27', 'Apr 30', 'May 3', 'May 6', 'May 9', 'May 12'],
                    datasets: [{
                        label: 'BMI',
                        data: bmiData,
                        borderColor: 'rgb(16, 185, 129)',
                        backgroundColor: 'rgba(16, 185, 129, 0.1)',
                        borderWidth: 2,
                        tension: 0.3,
                        fill: true,
                        pointBackgroundColor: 'rgb(16, 185, 129)',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: 'rgb(16, 185, 129)'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                        },
                        // Annotation plugin is needed for these lines.
                        // If you uncomment the CDN link for chartjs-plugin-annotation, this will work.
                        // Otherwise, these lines won't appear.
                        /*
                        annotation: {
                            annotations: {
                                underweight: {
                                    type: 'line',
                                    yMin: 18.5,
                                    yMax: 18.5,
                                    borderColor: 'rgb(250, 204, 21)', // Yellow
                                    borderWidth: 2,
                                    borderDash: [6, 6],
                                    label: {
                                        content: "Underweight",
                                        enabled: true,
                                        position: "start",
                                        font: { size: 10 },
                                        backgroundColor: 'rgba(250, 204, 21, 0.1)'
                                    }
                                },
                                normalMax: {
                                    type: 'line',
                                    yMin: 24.9,
                                    yMax: 24.9,
                                    borderColor: 'rgb(34, 197, 94)', // Green
                                    borderWidth: 2,
                                    borderDash: [6, 6],
                                    label: {
                                        content: "Normal",
                                        enabled: true,
                                        position: "start",
                                        font: { size: 10 },
                                        backgroundColor: 'rgba(34, 197, 94, 0.1)'
                                    }
                                },
                                overweight: {
                                    type: 'line',
                                    yMin: 29.9,
                                    yMax: 29.9,
                                    borderColor: 'rgb(249, 115, 22)', // Orange
                                    borderWidth: 2,
                                    borderDash: [6, 6],
                                    label: {
                                        content: "Overweight",
                                        enabled: true,
                                        position: "start",
                                        font: { size: 10 },
                                        backgroundColor: 'rgba(249, 115, 22, 0.1)'
                                    }
                                }
                            }
                        }
                        */
                    },
                    scales: {
                        y: {
                            beginAtZero: false,
                            min: getChartMin(bmiData, 1) > 15 ? getChartMin(bmiData, 1) : 15, // Sensible min for BMI
                            max: getChartMax(bmiData, 1) < 35 ? getChartMax(bmiData, 1) : 35, // Sensible max for BMI
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    }
                }
            });
        }

        // Workout Adherence Chart
        const workoutCtx = document.getElementById('workoutChart')?.getContext('2d');
        if (workoutCtx) {
            const workoutChart = new Chart(workoutCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Completed', 'Missed', 'Remaining'], // Adjusted labels
                    datasets: [{
                        label: 'Workout Status',
                        data: [23, 5, 0], // Example: 23 completed, 5 missed, 0 remaining in current cycle
                        backgroundColor: [
                            'rgb(124, 58, 237)', // Purple for completed
                            'rgb(239, 68, 68)',   // Red for missed
                            'rgb(209, 213, 219)'  // Gray for remaining/scheduled
                        ],
                        borderColor: '#fff', // White border for segments
                        borderWidth: 2,
                        hoverOffset: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false, // Important for doughnut in a flex container
                    cutout: '60%', // Makes it a doughnut instead of a pie
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 15,
                                usePointStyle: true,
                                pointStyle: 'circle',
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    let label = context.label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    if (context.parsed !== null) {
                                        label += context.parsed;
                                    }
                                    return label;
                                }
                            }
                        },
                        title: { // Optional: Add a title inside the chart
                            display: true,
                            text: '82%', // Example, calculate dynamically
                            position: 'top', // or 'bottom', 'left', 'right'
                            align: 'center',
                            font: {
                                size: 18,
                                weight: 'bold'
                            },
                            padding: {
                                top: 10,
                                bottom: 5
                            },
                            color: 'rgb(124, 58, 237)' // Match a color or use a neutral one
                        }
                    }
                }
            });
        }

        // Nutrition Summary Chart
        const nutritionCtx = document.getElementById('nutritionChart')?.getContext('2d');
        if (nutritionCtx) {
            const nutritionChart = new Chart(nutritionCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Protein (g)', 'Carbs (g)', 'Fat (g)'],
                    datasets: [{
                        label: 'Macronutrients',
                        data: [134, 245, 72], // Values from your HTML
                        backgroundColor: [
                            'rgb(236, 72, 153)', // Pink for Protein
                            'rgb(59, 130, 246)', // Blue for Carbs
                            'rgb(245, 158, 11)'  // Yellow for Fat
                        ],
                        borderColor: '#fff',
                        borderWidth: 2,
                        hoverOffset: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '60%',
                    plugins: {
                        legend: {
                            position: 'bottom',
                             labels: {
                                padding: 15,
                                usePointStyle: true,
                                pointStyle: 'circle',
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    let label = context.label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    if (context.parsed !== null) {
                                        label += context.parsed + 'g';
                                    }
                                    return label;
                                }
                            }
                        },
                        title: { // Optional: Add a title like total calories
                            display: true,
                            text: 'Daily Intake', // Or calculate total calories
                            position: 'top',
                            align: 'center',
                            font: {
                                size: 16,
                                weight: 'bold'
                            },
                            padding: {
                                top: 10,
                                bottom: 5
                            },
                            color: 'rgb(249, 115, 22)' // Orange, or a neutral color
                        }
                    }
                }
            });
        }

        // Set default date for log_date input
        const dateInput = document.getElementById('log_date');
        if (dateInput && !dateInput.value) {
            const today = new Date();
            const yyyy = today.getFullYear();
            const mm = String(today.getMonth() + 1).padStart(2, '0'); // Months are 0-indexed
            const dd = String(today.getDate()).padStart(2, '0');
            dateInput.value = `${yyyy}-${mm}-${dd}`;
        }

    });
</script>
@endpush
@endsection
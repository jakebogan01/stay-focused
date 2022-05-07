<x-app-layout>
    <div class="mt-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <h2 class="text-lg leading-6 font-medium text-gray-900">
                Overview
            </h2>

            <div class="mt-2 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @for($i = 0; $i < 3; $i++)
                    <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
                        <dt>
                            <div class="absolute bg-indigo-500 rounded-md p-3">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-sm font-medium text-gray-500 truncate">
                                Total Subscribers
                            </p>
                        </dt>
                        <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
                            <p class="text-2xl font-semibold text-gray-900">
                                71,897
                            </p>
                            <p class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                <svg class="self-center flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Increased by</span> 122
                            </p>
                            <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
                                <div class="text-sm">
                                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                        View all<span class="sr-only"> Total Subscribers stats</span>
                                    </a>
                                </div>
                            </div>
                        </dd>
                    </div>
                @endfor
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 px-8">
            <div x-data="{
                values: [45, 55, 75, 25, 45, 110],
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June'],
                init() {
                    let chart = new ApexCharts(this.$refs.chart, this.options)
                    chart.render()
                    this.$watch('values', () => {
                        chart.updateOptions(this.options)
                    })
                },
                get options() {
                    return {
                        chart: { type: 'line', toolbar: false },
                        tooltip: {
                            marker: false,
                            y: {
                                formatter(number) {
                                    return '$'+number
                                }
                            }
                        },
                        xaxis: { categories: this.labels },
                        series: [{
                            name: 'Sales',
                            data: this.values,
                        }],
                    }
                }
            }">
                <div x-ref="chart" class="bg-white rounded-lg py-9 mx-auto max-w-screen-sm"></div>
            </div>

            <div x-data="{
                values: [45, 55, 75, 25, 45, 110],
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June'],
                init() {
                    let chart = new ApexCharts(this.$refs.chart, this.options)
                    chart.render()
                    this.$watch('values', () => {
                        chart.updateOptions(this.options)
                    })
                },
                get options() {
                    return {
                        chart: { type: 'bar', toolbar: false },
                        tooltip: {
                            marker: false,
                            y: {
                                formatter(number) {
                                    return '$'+number
                                }
                        }
                        },
                        xaxis: { categories: this.labels },
                        series: [{
                            name: 'Sales',
                            data: this.values,
                        }],
                    }
                }
            }">
                <div x-ref="chart" class="bg-white rounded-lg py-9 mx-auto max-w-screen-sm"></div>
            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-welcome :data="$data" />
        </div>
    </div>
</x-app-layout>

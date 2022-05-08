<x-app-layout>
    <div class="mt-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <h2 class="text-lg leading-6 font-medium text-gray-900">
                Overview
            </h2>

            <div class="mt-2 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <x-quick-stats></x-quick-stats>
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

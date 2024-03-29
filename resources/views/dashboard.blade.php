<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Andres Gunawan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>

                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                        data-tabs-toggle="#myTabContent" role="tablist">
                        <li class="mr-2" role="presentation">
                            <button
                                class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 dark:border-blue-500"
                                id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                                aria-controls="profile" aria-selected="true">Profile</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button
                                class="inline-block p-4 text-gray-500 border-b-2 border-transparent border-gray-100 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent dark:text-gray-400 dark:border-gray-700"
                                id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                                aria-controls="dashboard" aria-selected="false">Dashboard</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button
                                class="inline-block p-4 text-gray-500 border-b-2 border-transparent border-gray-100 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent dark:text-gray-400 dark:border-gray-700"
                                id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                                aria-controls="settings" aria-selected="false">Settings</button>
                        </li>
                        <li role="presentation">
                            <button
                                class="inline-block p-4 text-gray-500 border-b-2 border-transparent border-gray-100 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent dark:text-gray-400 dark:border-gray-700"
                                id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                                aria-controls="contacts" aria-selected="false">Contacts</button>
                        </li>
                    </ul>
                </div>
                <div id="myTabContent">
                    <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
                        aria-labelledby="profile-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">Introduce myself. My name is Andres Gunawan and I’m from Sukabumi. I’m a college student at Nusa Putra University, majoring Informatic Engineering.</p>
                            <img src="./img/andres.jpg" class=""
                            .container {
                                width="150px"
                                height="200px"
                            }   
                            >
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel"
                        aria-labelledby="dashboard-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the Dashboard tab's associated
                                content. Clicking another tab will toggle the visibility of this one for the
                            next.</p>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel"
                        aria-labelledby="settings-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the Settings tab's associated
                                content. Clicking another tab will toggle the visibility of this one for the
                            next.</p>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel"
                        aria-labelledby="contacts-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">This is a contact that can be contacted for more info :
                            <br>Whatsapp : 085720975989
                            <br>Instagram : Andres Gunawan
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
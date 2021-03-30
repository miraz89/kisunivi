<div class="intro-y flex flex-col-reverse sm:flex-row items-center">
    <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
        <i class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-gray-700" data-feather="search"></i>
        <input type="text" class="input w-full sm:w-64 box px-10 text-gray-700 placeholder-theme-13" placeholder="Search mail">
        <div class="inbox-filter dropdown absolute inset-y-0 mr-3 right-0 flex items-center">
            <i class="dropdown-toggle w-4 h-4 cursor-pointer text-gray-700" data-feather="chevron-down"></i>
            <div class="inbox-filter__dropdown-box dropdown-box mt-10 absolute top-0 left-0 z-20">
                <div class="dropdown-box__content box p-5">
                    <div class="grid grid-cols-12 gap-4 row-gap-3">
                        <div class="col-span-6">
                            <div class="text-xs">From</div>
                            <input type="text" class="input w-full border mt-2 flex-1" placeholder="example@gmail.com">
                        </div>
                        <div class="col-span-6">
                            <div class="text-xs">To</div>
                            <input type="text" class="input w-full border mt-2 flex-1" placeholder="example@gmail.com">
                        </div>
                        <div class="col-span-6">
                            <div class="text-xs">Subject</div>
                            <input type="text" class="input w-full border mt-2 flex-1" placeholder="Important Meeting">
                        </div>
                        <div class="col-span-6">
                            <div class="text-xs">Has the Words</div>
                            <input type="text" class="input w-full border mt-2 flex-1" placeholder="Job, Work, Documentation">
                        </div>
                        <div class="col-span-6">
                            <div class="text-xs">Doesn't Have</div>
                            <input type="text" class="input w-full border mt-2 flex-1" placeholder="Job, Work, Documentation">
                        </div>
                        <div class="col-span-6">
                            <div class="text-xs">Size</div>
                            <select class="input w-full border mt-2 flex-1">
                                <option>10</option>
                                <option>25</option>
                                <option>35</option>
                                <option>50</option>
                            </select>
                        </div>
                        <div class="col-span-12 flex items-center mt-3">
                            <button class="button w-32 justify-center block bg-gray-200 text-gray-600 ml-auto">Create Filter</button>
                            <button class="button w-32 justify-center block bg-theme-1 text-white ml-2">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full sm:w-auto flex">
        <button class="button text-white bg-theme-1 shadow-md mr-2">Start a Video Call</button>
        <div class="dropdown relative">
            <button class="dropdown-toggle button px-2 box text-gray-700">
                <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
            </button>
            <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                <div class="dropdown-box__content box p-2">
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Contacts </a>
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings </a>
                </div>
            </div>
        </div>
    </div>
</div>

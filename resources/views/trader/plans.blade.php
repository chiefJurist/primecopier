<x-trader-layout>
    <div>
        {{-- first div --}}
        <div class="profile-first-div-con">
            <div class="profile-first-div-wrap-one">
                <div class="profile-first-div-wrap-two">Copy Traders</div>
                <div class="profile-first-div-wrap-three">
                    <span>Dashboard</span>
                    <span class="icon-[ph--dot] profile-first-div-wrap-four"></span>
                    <span>Copy Trade</span>
                </div>
            </div>
            <div class="profile-first-div-wrap-five">
                <img src="{{asset('img/profile-img-one.png')}}" alt="profile-img-1">
            </div>
        </div>

        {{-- second div --}}
        <div class="plans-second-div-con">
            <div class="plans-second-div-wrap-one">Copy Traders</div>

            <div class="plans-second-div-wrap-two">
                Take complete control of your investment portfolio with ease by seamlessly copying the real-time trades and proven strategies of top-performing expert traders, allowing you to grow your wealth effortlessly while learning from the best in the industry.
            </div>

            {{--plan one --}}
            <div class="plans-second-div-wrap-three">
                <div class="plans-second-div-wrap-four">
                    <div class="plans-second-div-wrap-five">
                        <img src="img/trader-1.jpg" alt="trader-img" class="rounded-full w-14">
                        <span>GNOTZ</span>
                    </div>
                    <div class="plans-second-div-wrap-six">
                        <div class="plans-second-div-wrap-seven">
                            <div>
                                <div class="plans-second-div-wrap-eight">45%</div>
                                <div class="plans-second-div-wrap-nine">Profit Rate</div>
                            </div>
                            <div>
                                <div class="plans-second-div-wrap-eight">28</div>
                                <div class="plans-second-div-wrap-nine">Term Days</div>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-ten">
                            <div class="plans-second-div-wrap-eleven">
                                <span>Min Deposit</span>
                                <span>-</span>
                                <span>1000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Max Deposit</span>
                                <span>-</span>
                                <span>10000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Capital Return</span>
                                <span>-</span>
                                <span>Each Term</span>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-twelve">
                            <div class="plans-second-div-wrap-thirteen button" onclick="togglePlanModalOne()"> 
                                <span>Copy Now</span>
                                <span class="icon-[tabler--building-bank] plans-second-div-wrap-fourteen"></span>
                            </div>
                        </div>
                    </div>
                </div>

                {{--plan two --}}
                <div class="plans-second-div-wrap-four">
                    <div class="plans-second-div-wrap-five">
                        <img src="img/trader-2.jpg" alt="trader-img" class="rounded-full w-14">
                        <span>Trading Trend</span>
                    </div>
                    <div class="plans-second-div-wrap-six">
                        <div class="plans-second-div-wrap-seven">
                            <div>
                                <div class="plans-second-div-wrap-eight">55%</div>
                                <div class="plans-second-div-wrap-nine">Profit Rate</div>
                            </div>
                            <div>
                                <div class="plans-second-div-wrap-eight">28</div>
                                <div class="plans-second-div-wrap-nine">Term Days</div>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-ten">
                            <div class="plans-second-div-wrap-eleven">
                                <span>Min Deposit</span>
                                <span>-</span>
                                <span>10,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Max Deposit</span>
                                <span>-</span>
                                <span>50,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Capital Return</span>
                                <span>-</span>
                                <span>Each Term</span>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-twelve">
                            <div class="plans-second-div-wrap-thirteen button" onclick="togglePlanModalTwo()"> 
                                <span>Copy Now</span>
                                <span class="icon-[tabler--building-bank] plans-second-div-wrap-fourteen"></span>
                            </div>
                        </div>
                    </div>
                </div>

                {{--plan three --}}
                <div class="plans-second-div-wrap-four">
                    <div class="plans-second-div-wrap-five">
                        <img src="img/trader-3.jpg" alt="trader-img" class="rounded-full w-14">
                        <span>Paradise phys</span>
                    </div>
                    <div class="plans-second-div-wrap-six">
                        <div class="plans-second-div-wrap-seven">
                            <div>
                                <div class="plans-second-div-wrap-eight">65%</div>
                                <div class="plans-second-div-wrap-nine">Profit Rate</div>
                            </div>
                            <div>
                                <div class="plans-second-div-wrap-eight">28</div>
                                <div class="plans-second-div-wrap-nine">Term Days</div>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-ten">
                            <div class="plans-second-div-wrap-eleven">
                                <span>Min Deposit</span>
                                <span>-</span>
                                <span>50,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Max Deposit</span>
                                <span>-</span>
                                <span>100,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Capital Return</span>
                                <span>-</span>
                                <span>Each Term</span>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-twelve">
                            <div class="plans-second-div-wrap-thirteen button" onclick="togglePlanModalThree()"> 
                                <span>Copy Now</span>
                                <span class="icon-[tabler--building-bank] plans-second-div-wrap-fourteen"></span>
                            </div>
                        </div>
                    </div>
                </div>

                {{--plan four --}}
                <div class="plans-second-div-wrap-four">
                    <div class="plans-second-div-wrap-five">
                        <img src="img/trader-4.jpg" alt="trader-img" class="rounded-full w-14">
                        <span>Kostak Alavruzos</span>
                    </div>
                    <div class="plans-second-div-wrap-six">
                        <div class="plans-second-div-wrap-seven">
                            <div>
                                <div class="plans-second-div-wrap-eight">75%</div>
                                <div class="plans-second-div-wrap-nine">Profit Rate</div>
                            </div>
                            <div>
                                <div class="plans-second-div-wrap-eight">38</div>
                                <div class="plans-second-div-wrap-nine">Term Days</div>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-ten">
                            <div class="plans-second-div-wrap-eleven">
                                <span>Min Deposit</span>
                                <span>-</span>
                                <span>100,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Max Deposit</span>
                                <span>-</span>
                                <span>1,000,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Capital Return</span>
                                <span>-</span>
                                <span>Each Term</span>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-twelve">
                            <div class="plans-second-div-wrap-thirteen button" onclick="togglePlanModalFour()"> 
                                <span>Copy Now</span>
                                <span class="icon-[tabler--building-bank] plans-second-div-wrap-fourteen"></span>
                            </div>
                        </div>
                    </div>
                </div>

                {{--plan five --}}
                <div class="plans-second-div-wrap-four">
                    <div class="plans-second-div-wrap-five">
                        <img src="img/trader-5.jpg" alt="trader-img" class="rounded-full w-14">
                        <span>Stanfx official</span>
                    </div>
                    <div class="plans-second-div-wrap-six">
                        <div class="plans-second-div-wrap-seven">
                            <div>
                                <div class="plans-second-div-wrap-eight">45%</div>
                                <div class="plans-second-div-wrap-nine">Interest</div>
                            </div>
                            <div>
                                <div class="plans-second-div-wrap-eight">28</div>
                                <div class="plans-second-div-wrap-nine">Term Days</div>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-ten">
                            <div class="plans-second-div-wrap-eleven">
                                <span>Min Deposit</span>
                                <span>-</span>
                                <span>500 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Max Deposit</span>
                                <span>-</span>
                                <span>10,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Capital Return</span>
                                <span>-</span>
                                <span>Each Term</span>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-twelve">
                            <div class="plans-second-div-wrap-thirteen button" onclick="togglePlanModalFive()"> 
                                <span>Copy Now</span>
                                <span class="icon-[tabler--building-bank] plans-second-div-wrap-fourteen"></span>
                            </div>
                        </div>
                    </div>
                </div>

                {{--plan six --}}
                <div class="plans-second-div-wrap-four">
                    <div class="plans-second-div-wrap-five">
                        <img src="img/trader-6.jpg" alt="trader-img" class="rounded-full w-14">
                        <span>Chad Christian</span>
                    </div>
                    <div class="plans-second-div-wrap-six">
                        <div class="plans-second-div-wrap-seven">
                            <div>
                                <div class="plans-second-div-wrap-eight">85%</div>
                                <div class="plans-second-div-wrap-nine">Profit Rate</div>
                            </div>
                            <div>
                                <div class="plans-second-div-wrap-eight">64</div>
                                <div class="plans-second-div-wrap-nine">Term Days</div>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-ten">
                            <div class="plans-second-div-wrap-eleven">
                                <span>Min Deposit</span>
                                <span>-</span>
                                <span>50,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Max Deposit</span>
                                <span>-</span>
                                <span>1,000,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Capital Return</span>
                                <span>-</span>
                                <span>Each Term</span>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-twelve">
                            <div class="plans-second-div-wrap-thirteen button" onclick="togglePlanModalSix()"> 
                                <span>Copy Now</span>
                                <span class="icon-[tabler--building-bank] plans-second-div-wrap-fourteen"></span>
                            </div>
                        </div>
                    </div>
                </div>

                {{--plan seven--}}
                <div class="plans-second-div-wrap-four">
                    <div class="plans-second-div-wrap-five">
                        <img src="img/trader-7.jpg" alt="trader-img" class="rounded-full w-14">
                        <span>Damiano L</span>
                    </div>
                    <div class="plans-second-div-wrap-six">
                        <div class="plans-second-div-wrap-seven">
                            <div>
                                <div class="plans-second-div-wrap-eight">65%</div>
                                <div class="plans-second-div-wrap-nine">Profit Rate</div>
                            </div>
                            <div>
                                <div class="plans-second-div-wrap-eight">28</div>
                                <div class="plans-second-div-wrap-nine">Term Days</div>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-ten">
                            <div class="plans-second-div-wrap-eleven">
                                <span>Min Deposit</span>
                                <span>-</span>
                                <span>55,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Max Deposit</span>
                                <span>-</span>
                                <span>1,000,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Capital Return</span>
                                <span>-</span>
                                <span>Each Term</span>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-twelve">
                            <div class="plans-second-div-wrap-thirteen button" onclick="togglePlanModalSeven()"> 
                                <span>Copy Now</span>
                                <span class="icon-[tabler--building-bank] plans-second-div-wrap-fourteen"></span>
                            </div>
                        </div>
                    </div>
                </div>

                {{--plan eight--}}
                <div class="plans-second-div-wrap-four">
                    <div class="plans-second-div-wrap-five">
                        <img src="img/trader-8.jpg" alt="trader-img" class="rounded-full w-14">
                        <span>Vulture trades</span>
                    </div>
                    <div class="plans-second-div-wrap-six">
                        <div class="plans-second-div-wrap-seven">
                            <div>
                                <div class="plans-second-div-wrap-eight">85%</div>
                                <div class="plans-second-div-wrap-nine">Profit Rate</div>
                            </div>
                            <div>
                                <div class="plans-second-div-wrap-eight">56</div>
                                <div class="plans-second-div-wrap-nine">Term Days</div>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-ten">
                            <div class="plans-second-div-wrap-eleven">
                                <span>Min Deposit</span>
                                <span>-</span>
                                <span>100,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Max Deposit</span>
                                <span>-</span>
                                <span>1,000,000 USD</span>
                            </div>
                            <div class="plans-second-div-wrap-eleven">
                                <span>Capital Return</span>
                                <span>-</span>
                                <span>Each Term</span>
                            </div>
                        </div>
                        <div class="plans-second-div-wrap-twelve">
                            <div class="plans-second-div-wrap-thirteen button" onclick="togglePlanModalEight()"> 
                                <span>Copy Now</span>
                                <span class="icon-[tabler--building-bank] plans-second-div-wrap-fourteen"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-trader-layout>
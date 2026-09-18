<div>
    <div class="font-semibold text-gray-700 dark:text-gray-300">
        {{ __('modules.package.amount') }}
    </div>

    <div>
        {{ $latestSubscription?->currency?->currency_symbol ?? '' }}
        {{ number_format($latestSubscription?->currentInvoice?->total ?? 0, 2) }}
    </div>

    <div class="font-semibold text-gray-700 dark:text-gray-300">
        {{ __('modules.package.paymentDate') }}
    </div>

    <div>
        {{ $latestSubscription?->currentInvoice?->pay_date
            ? \Carbon\Carbon::parse($latestSubscription->currentInvoice->pay_date)->format('d-m-Y')
            : '--' }}
    </div>

    <div class="font-semibold text-gray-700 dark:text-gray-300">
        {{ __('modules.package.nextPaymentDate') }}
    </div>

    <div>
        {{ $latestSubscription?->currentInvoice?->next_pay_date
            ? \Carbon\Carbon::parse($latestSubscription->currentInvoice->next_pay_date)->format('d-m-Y')
            : '--' }}
    </div>

    <div class="font-semibold text-gray-700 dark:text-gray-300">
        {{ __('modules.package.licenseExpiresOn') }}
    </div>

    <div>
        {{ $latestSubscription?->license_expire_on
            ? \Carbon\Carbon::parse($latestSubscription->license_expire_on)->format('d-m-Y')
            : '--' }}
    </div>
</div>
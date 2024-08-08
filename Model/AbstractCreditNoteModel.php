<?php

namespace Miracode\StripeBundle\Model;

use Miracode\StripeBundle\Annotation\StripeObjectParam;

abstract class AbstractCreditNoteModel extends StripeModel
{
    /**
     * @StripeObjectParam
     *
     * @var string
     */
    protected $currency;

    /**
     * @StripeObjectParam
     *
     * @var string
     */
    protected $invoice;

    /**
     * @StripeObjectParam
     *
     * @var array
     */
    protected $lines;

    /**
     * @StripeObjectParam
     *
     * @var string|null
     */
    protected $memo;

    /**
     * @StripeObjectParam
     *
     * @var array
     */
    protected $metadata;

    /**
     * @StripeObjectParam
     *
     * @var string|null
     */
    protected $reason;

    /**
     * @StripeObjectParam
     *
     * @var string
     */
    protected $status;

    /**
     * @StripeObjectParam
     *
     * @var int
     */
    protected $subtotal;

    /**
     * @StripeObjectParam
     *
     * @var int
     */
    protected $total;

    /**
     * @StripeObjectParam
     *
     * @var string
     */
    protected $object;

    /**
     * @StripeObjectParam
     *
     * @var int
     */
    protected $amount;

    /**
     * @StripeObjectParam(name="amount_shipping")
     *
     * @var int
     */
    protected $amountShipping;

    /**
     * @StripeObjectParam
     *
     * @var int
     */
    protected $created;

    /**
     * @StripeObjectParam
     *
     * @var string
     */
    protected $customer;

    /**
     * @StripeObjectParam(name="customer_balance_transaction")
     *
     * @var string|null
     */
    protected $customerBalanceTransaction;

    /**
     * @StripeObjectParam(name="discount_amount")
     *
     * @deprecated
     *
     * @var int
     */
    protected $discountAmount;

    /**
     * @StripeObjectParam(name="discount_amounts")
     *
     * @var array
     */
    protected $discountAmounts;

    /**
     * @StripeObjectParam(name="effective_at")
     *
     * @var int|null
     */
    protected $effectiveAt;

    /**
     * @StripeObjectParam
     *
     * @var bool
     */
    protected $livemode;

    /**
     * @StripeObjectParam
     *
     * @var string
     */
    protected $number;

    /**
     * @StripeObjectParam(name="out_of_band_amount")
     *
     * @var int|null
     */
    protected $outOfBandAmount;

    /**
     * @StripeObjectParam
     *
     * @var string
     */
    protected $pdf;

    /**
     * @StripeObjectParam
     *
     * @var string|null
     */
    protected $refund;

    /**
     * @StripeObjectParam(name="shipping_cost")
     *
     * @var array|null
     */
    protected $shippingCost;

    /**
     * @StripeObjectParam(name="subtotal_excluding_tax")
     *
     * @var int|null
     */
    protected $subtotalExcludingTax;

    /**
     * @StripeObjectParam(name="tax_amounts")
     *
     * @var array
     */
    protected $taxAmounts;

    /**
     * @StripeObjectParam(name="total_excluding_tax")
     *
     * @var int|null
     */
    protected $totalExcludingTax;

    /**
     * @StripeObjectParam
     *
     * @var string
     */
    protected $type;

    /**
     * @StripeObjectParam(name="voided_at")
     *
     * @var int|null
     */
    protected $voidedAt;

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): AbstractCreditNoteModel
    {
        $this->currency = $currency;

        return $this;
    }

    public function getInvoice(): string
    {
        return $this->invoice;
    }

    /**
     * @return AbstractCreditNoteModel
     */
    public function setInvoice(string $invoice)
    {
        $this->invoice = $invoice;

        return $this;
    }

    public function getLines(): array
    {
        return $this->lines;
    }

    public function setLines(array $lines): AbstractCreditNoteModel
    {
        $this->lines = $lines;

        return $this;
    }

    public function getMemo(): ?string
    {
        return $this->memo;
    }

    public function setMemo(?string $memo): AbstractCreditNoteModel
    {
        $this->memo = $memo;

        return $this;
    }

    public function getMetadata(): array
    {
        return $this->metadata;
    }

    public function setMetadata(array $metadata): AbstractCreditNoteModel
    {
        $this->metadata = $metadata;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): AbstractCreditNoteModel
    {
        $this->reason = $reason;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): AbstractCreditNoteModel
    {
        $this->status = $status;

        return $this;
    }

    public function getSubtotal(): int
    {
        return $this->subtotal;
    }

    public function setSubtotal(int $subtotal): AbstractCreditNoteModel
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function setTotal(int $total): AbstractCreditNoteModel
    {
        $this->total = $total;

        return $this;
    }

    public function getObject(): string
    {
        return $this->object;
    }

    public function setObject(string $object): AbstractCreditNoteModel
    {
        $this->object = $object;

        return $this;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): AbstractCreditNoteModel
    {
        $this->amount = $amount;

        return $this;
    }

    public function getAmountShipping(): int
    {
        return $this->amountShipping;
    }

    public function setAmountShipping(int $amountShipping): AbstractCreditNoteModel
    {
        $this->amountShipping = $amountShipping;

        return $this;
    }

    public function getCreated(): int
    {
        return $this->created;
    }

    public function setCreated(int $created): AbstractCreditNoteModel
    {
        $this->created = $created;

        return $this;
    }

    public function getCustomer(): string
    {
        return $this->customer;
    }

    public function setCustomer(string $customer): AbstractCreditNoteModel
    {
        $this->customer = $customer;

        return $this;
    }

    public function getCustomerBalanceTransaction(): ?string
    {
        return $this->customerBalanceTransaction;
    }

    public function setCustomerBalanceTransaction(?string $customerBalanceTransaction): AbstractCreditNoteModel
    {
        $this->customerBalanceTransaction = $customerBalanceTransaction;

        return $this;
    }

    public function getDiscountAmount(): int
    {
        return $this->discountAmount;
    }

    public function setDiscountAmount(int $discountAmount): AbstractCreditNoteModel
    {
        $this->discountAmount = $discountAmount;

        return $this;
    }

    public function getDiscountAmounts(): array
    {
        return $this->discountAmounts;
    }

    public function setDiscountAmounts(array $discountAmounts): AbstractCreditNoteModel
    {
        $this->discountAmounts = $discountAmounts;

        return $this;
    }

    public function getEffectiveAt(): ?int
    {
        return $this->effectiveAt;
    }

    public function setEffectiveAt(?int $effectiveAt): AbstractCreditNoteModel
    {
        $this->effectiveAt = $effectiveAt;

        return $this;
    }

    public function isLivemode(): bool
    {
        return $this->livemode;
    }

    public function setLivemode(bool $livemode): AbstractCreditNoteModel
    {
        $this->livemode = $livemode;

        return $this;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): AbstractCreditNoteModel
    {
        $this->number = $number;

        return $this;
    }

    public function getOutOfBandAmount(): ?int
    {
        return $this->outOfBandAmount;
    }

    public function setOutOfBandAmount(?int $outOfBandAmount): AbstractCreditNoteModel
    {
        $this->outOfBandAmount = $outOfBandAmount;

        return $this;
    }

    public function getPdf(): string
    {
        return $this->pdf;
    }

    public function setPdf(string $pdf): AbstractCreditNoteModel
    {
        $this->pdf = $pdf;

        return $this;
    }

    public function getRefund(): ?string
    {
        return $this->refund;
    }

    public function setRefund(?string $refund): AbstractCreditNoteModel
    {
        $this->refund = $refund;

        return $this;
    }

    public function getShippingCost(): ?array
    {
        return $this->shippingCost;
    }

    public function setShippingCost(?array $shippingCost): AbstractCreditNoteModel
    {
        $this->shippingCost = $shippingCost;

        return $this;
    }

    public function getSubtotalExcludingTax(): ?int
    {
        return $this->subtotalExcludingTax;
    }

    public function setSubtotalExcludingTax(?int $subtotalExcludingTax): AbstractCreditNoteModel
    {
        $this->subtotalExcludingTax = $subtotalExcludingTax;

        return $this;
    }

    public function getTaxAmounts(): array
    {
        return $this->taxAmounts;
    }

    public function setTaxAmounts(array $taxAmounts): AbstractCreditNoteModel
    {
        $this->taxAmounts = $taxAmounts;

        return $this;
    }

    public function getTotalExcludingTax(): ?int
    {
        return $this->totalExcludingTax;
    }

    public function setTotalExcludingTax(?int $totalExcludingTax): AbstractCreditNoteModel
    {
        $this->totalExcludingTax = $totalExcludingTax;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): AbstractCreditNoteModel
    {
        $this->type = $type;

        return $this;
    }

    public function getVoidedAt(): ?int
    {
        return $this->voidedAt;
    }

    public function setVoidedAt(?int $voidedAt): AbstractCreditNoteModel
    {
        $this->voidedAt = $voidedAt;

        return $this;
    }
}

<?php

namespace Miracode\StripeBundle\Model;

use Miracode\StripeBundle\Annotation\StripeObjectParam;

abstract class AbstractDisputeModel extends StripeModel
{
    /**
     * @StripeObjectParam
     *
     * @var int
     */
    protected $amount;

    /**
     * @StripeObjectParam
     *
     * @var string
     */
    protected $charge;

    /**
     * @StripeObjectParam
     *
     * @var string
     */
    protected $currency;

    /**
     * @StripeObjectParam
     *
     * @var array
     */
    protected $evidence;

    /**
     * @StripeObjectParam
     *
     * @var array
     */
    protected $metadata;

    /**
     * @StripeObjectParam(name="payment_intent")
     *
     * @var string|null
     */
    protected $paymentIntent;

    /**
     * @StripeObjectParam
     *
     * @var string
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
     * @var string
     */
    protected $object;

    /**
     * @StripeObjectParam(name="balance_transactions")
     *
     * @var array
     */
    protected $balanceTransactions;

    /**
     * @StripeObjectParam
     *
     * @var int
     */
    protected $created;

    /**
     * @StripeObjectParam(name="evidence_details")
     *
     * @var array
     */
    protected $evidenceDetails;

    /**
     * @StripeObjectParam(name="is_charge_refundable")
     *
     * @var bool
     */
    protected $isChargeRefundable;

    /**
     * @StripeObjectParam
     *
     * @var bool
     */
    protected $livemode;

    /**
     * @StripeObjectParam(name="payment_method_details")
     *
     * @var array|null
     */
    protected $paymentMethodDetails;

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return AbstractDisputeModel
     */
    public function setAmount(int $amount): AbstractDisputeModel
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getCharge(): string
    {
        return $this->charge;
    }

    /**
     * @param string $charge
     * @return AbstractDisputeModel
     */
    public function setCharge(string $charge): AbstractDisputeModel
    {
        $this->charge = $charge;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return AbstractDisputeModel
     */
    public function setCurrency(string $currency): AbstractDisputeModel
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return array
     */
    public function getEvidence(): array
    {
        return $this->evidence;
    }

    /**
     * @param array $evidence
     * @return AbstractDisputeModel
     */
    public function setEvidence(array $evidence): AbstractDisputeModel
    {
        $this->evidence = $evidence;

        return $this;
    }

    /**
     * @return array
     */
    public function getMetadata(): array
    {
        return $this->metadata;
    }

    /**
     * @param array $metadata
     * @return AbstractDisputeModel
     */
    public function setMetadata(array $metadata): AbstractDisputeModel
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentIntent(): ?string
    {
        return $this->paymentIntent;
    }

    /**
     * @param string|null $paymentIntent
     * @return AbstractDisputeModel
     */
    public function setPaymentIntent(?string $paymentIntent): AbstractDisputeModel
    {
        $this->paymentIntent = $paymentIntent;

        return $this;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return AbstractDisputeModel
     */
    public function setReason(string $reason): AbstractDisputeModel
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return AbstractDisputeModel
     */
    public function setStatus(string $status): AbstractDisputeModel
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * @param string $object
     * @return AbstractDisputeModel
     */
    public function setObject(string $object): AbstractDisputeModel
    {
        $this->object = $object;

        return $this;
    }

    /**
     * @return array
     */
    public function getBalanceTransactions(): array
    {
        return $this->balanceTransactions;
    }

    /**
     * @param array $balanceTransactions
     * @return AbstractDisputeModel
     */
    public function setBalanceTransactions(array $balanceTransactions): AbstractDisputeModel
    {
        $this->balanceTransactions = $balanceTransactions;

        return $this;
    }

    /**
     * @return int
     */
    public function getCreated(): int
    {
        return $this->created;
    }

    /**
     * @param int $created
     * @return AbstractDisputeModel
     */
    public function setCreated(int $created): AbstractDisputeModel
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return array
     */
    public function getEvidenceDetails(): array
    {
        return $this->evidenceDetails;
    }

    /**
     * @param array $evidenceDetails
     * @return AbstractDisputeModel
     */
    public function setEvidenceDetails(array $evidenceDetails): AbstractDisputeModel
    {
        $this->evidenceDetails = $evidenceDetails;

        return $this;
    }

    /**
     * @return bool
     */
    public function isChargeRefundable(): bool
    {
        return $this->isChargeRefundable;
    }

    /**
     * @param bool $isChargeRefundable
     * @return AbstractDisputeModel
     */
    public function setIsChargeRefundable(bool $isChargeRefundable): AbstractDisputeModel
    {
        $this->isChargeRefundable = $isChargeRefundable;

        return $this;
    }

    /**
     * @return bool
     */
    public function isLivemode(): bool
    {
        return $this->livemode;
    }

    /**
     * @param bool $livemode
     * @return AbstractDisputeModel
     */
    public function setLivemode(bool $livemode): AbstractDisputeModel
    {
        $this->livemode = $livemode;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getPaymentMethodDetails(): ?array
    {
        return $this->paymentMethodDetails;
    }

    /**
     * @param array|null $paymentMethodDetails
     * @return AbstractDisputeModel
     */
    public function setPaymentMethodDetails(?array $paymentMethodDetails): AbstractDisputeModel
    {
        $this->paymentMethodDetails = $paymentMethodDetails;

        return $this;
    }
}

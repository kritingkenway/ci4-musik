<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProductModel;
use App\Models\ConfirmPayModel;
use App\Models\DetailTransactionModel;
use App\Models\TransactionModel;
use App\Models\AddressModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    protected $db;
    protected $userModel;
    protected $productModel;
    protected $addressModel;
    protected $transactionModel;
    protected $detailTransactionModel;
    protected $confirmPayModel;
    // protected $validation;
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['number', 'form', 'text', 'date'];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.


        $this->userModel = new UserModel();
        $this->productModel = new ProductModel();
        $this->detailTransactionModel = new DetailTransactionModel();
        $this->transactionModel = new TransactionModel();
        $this->confirmPayModel = new ConfirmPayModel();
        $this->addressModel = new AddressModel();
        $this->db = \Config\Database::connect();
        // $this->validation = \Config\Services::validation();
        // E.g.: $this->session = \Config\Services::session();
    }
}

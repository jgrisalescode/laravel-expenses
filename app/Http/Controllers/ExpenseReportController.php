<?php

namespace App\Http\Controllers;

use App\Models\ExpenseReport;
use App\Http\Requests\ExpenseReportRequest;

class ExpenseReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenses = ExpenseReport::all();
        return view('expenses.index', ['expenses' => $expenses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExpenseReportRequest $request)
    {
        $report = new ExpenseReport($request->validated());
        $report->save();
        return redirect('expense_reports');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExpenseReport  $expenseReport
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseReport $expenseReport)
    {
        $report = $expenseReport;
        return view('expenses.show', compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExpenseReport  $expenseReport
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpenseReport $expenseReport)
    {
        return view('expenses.edit', ['report' => $expenseReport]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ExpenseReportRequest $request
     * @param \App\Models\ExpenseReport $expenseReport
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ExpenseReportRequest $request, ExpenseReport $expenseReport)
    {
        $expenseReport->fill($request->validated());
        $expenseReport->save();
        return redirect('expense_reports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpenseReport  $expenseReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpenseReport $expenseReport)
    {
        $expenseReport->delete();
        return redirect('expense_reports');
    }

    public function confirmDelete(ExpenseReport $expenseReport)
    {
        return view('expenses.confirmDelete', [
            'report' => $expenseReport
        ]);
    }
}

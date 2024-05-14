<div class="contentOvertime pt-2">
    <div class="table-responsive mb-5 pb-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr>
                    <th>
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle col-12" type="button" id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false">Filter</button>
                            <ul class="dropdown-menu" aria-labelledby="filterDropdown">
                                <li><a class="dropdown-item" href="#">All</a></li>
                                <li><a class="dropdown-item" href="#">Read</a></li>
                                <li><a class="dropdown-item" href="#">Unread</a></li>
                                <li><a class="dropdown-item" href="#">Important</a></li>
                            </ul>
                        </div>
                    </th>
                    <th>
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle col-12" type="button" id="actionDropdown" data-bs-toggle="dropdown" aria-expanded="false">Latest</button>
                            <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </th>
                    <th colspan="2" style="min-width: 10rem">
                      <input id="searchOvertime" class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td>
                    <input type="checkbox"><i class="bi bi-check2 ms-1"></i><span class="ms-1"><b>Approve Request</b></span>
                  </td>
                  <td colspan="2">
                    <input type="checkbox"><i class="bi bi-x ms-1"></i><span class="ms-1"><b>Reject Request</b></span>
                  </td>
                </tr>
                <tr>
                    <td colspan="3" class="text-center">
                        <i class="bi bi-inbox-fill fs-1" style="height: 10rem"></i>
                        <br>
                        <span><b>You don't have any message right now.</b></span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>